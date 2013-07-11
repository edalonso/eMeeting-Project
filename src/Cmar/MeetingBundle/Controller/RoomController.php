<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;


use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\NickName;
use Cmar\MeetingBundle\Entity\Group;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Form\MeetingType;

/**    
 * Room controller.
 *
 */
class RoomController extends Controller
{
    /**
     * Redirec to a Ado Connect room 
     * True en findOneBySalt para buscar por Salt, false para buscar por SecretSalt
     * 
     * @Route("/room/{salt}", name="index_room", defaults={"secret" = false})
     * @Route("/secretroom/{salt}", name="index_secretroom", defaults={"secret" = true})
     * @Route("/secretroomcas/{salt}", name="index_secretroom_cas", defaults={"secret" = true})
     * @Route("/noanonymousroom/{salt}", name="index_noanonymousroom", defaults={"secret" = false})
     * @Route("/noanonymoussecretroom/{salt}", name="index_noanonymoussecretroom", defaults={"secret" = true})
     * @Template()
     **/
    public function roomAction($salt, $secret, Request $request)
    {

        $meetingService = $this->get('cmar_meeting');
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');
        $repo_nickname = $em->getRepository('CmarMeetingBundle:NickName');
        $user = $this->get('security.context')->getToken()->getUser();
        $ado_factory = $this->get('cmar_meeting.ado_factory');

        $numRooms = $meetingService->getNumRooms();
        $numRoomsForNonMagic = $meetingService->getNumRoomsForNonMagic();

        $active_meetings = $repo->findByStates(array(Meeting::STATE_NOW));

        $meeting = null;
        try {
            $meeting = $repo->findOneByViewSalt($salt);
        }  catch (\Exception $e) {
        }
        if ($meeting == null){
            try {
                $meeting = $repo->findOneBySaltOrSecretSalt($salt, !$secret);
            } catch (\Exception $e) {
                //TODO aviso sobre el tipo de error
                $error_type = "Access Denied";
                return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => $error_type));
            }
        }

        //Control de máximo número de salas simultáneas
        $xmls = $meetingService->reportActiveMeetings();
        $urls = array();
        $num_host = count($xmls->{'report-active-meetings'}->{'sco'});
        $total_participants = 0;
        $num_active_magic_rooms = 0;
        foreach ($xmls->{'report-active-meetings'}->{'sco'} as $reportActiveMeetings) {
            $urls[] = $reportActiveMeetings->{'url-path'};
            $total_participants = $total_participants + $reportActiveMeetings->attributes()->{'active-participants'};
            foreach ($active_meetings as $active_meeting) {
                if ($reportActiveMeetings->{'url-path'} == '/cmar-' . $active_meeting->getSecretsalt() . '/' AND $active_meeting->getMagic()) {
                    $num_active_magic_rooms = $num_active_magic_rooms +1;
                }
            }
        }

        $different_emeeting = true;
        foreach ($urls as $url) {
            if ($url == '/cmar-' . $meeting->getSecretsalt() . '/') $different_emeeting = false;
        }

        $error_type = null;
        if ($num_host > $numRoomsForNonMagic+$num_active_magic_rooms-1 AND $different_emeeting AND !$meeting->getMagic()) {
            $error_type = "Exceeded maximum number of simultaneous eMeetings";
        } elseif ($meeting->getMagic() AND $different_emeeting){
            if ($num_host > $numRooms-1) {
                $error_type = "Exceeded maximum number of simultaneous eMeetings";
            }
        }
        if ($error_type != null) {
            return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => $error_type));
        }

        //Send mail that it has reached the maximum number of meetings-1
        if ($num_host > $numRoomsForNonMagic-1) {
            $this->get('cmar_meeting.mailer')->sendToSupport('Exceeded maximum number of concurrent rooms');
        }
        if ($total_participants > 95) {
            $this->get('cmar_meeting.mailer')->sendToSupport('Exceeded maximum number of participants');
        }
        
        //Access Control from Anonymous access
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $asGuest = ($request->query->get('guest', false) == "true");
            if ($request->getMethod() == 'POST') {
                $login = trim($request->get('login'));
                if ($login == null) {
                    if ($salt == $meeting->getViewSalt()) $guest = true;
                    $this->get('session')->setFlash('error', 'The Name must not be empty!');
                    return $this->render('CmarMeetingBundle:Room:anonymous.html.twig', array('meeting' => $meeting, 'secret' => $secret, 'url' => $request->getpathInfo(), 'asGuest' => $asGuest));
                } elseif (strlen($login) > 23) {
                    $this->get('session')->setFlash('error', 'The Name is too long!');
                    return $this->render('CmarMeetingBundle:Room:anonymous.html.twig', array('meeting' => $meeting, 'secret' => $secret, 'url' => $request->getpathInfo(), 'asGuest' => $asGuest));
                }
                //Access Control for Students
                if ($salt == $meeting->getViewSalt()) {
                    return array(
                                 'url' => $meeting->getUrl() . "?guestName=" . $login,
                                 'title' => $meeting->getTitle()
                                 );
                }
                //Create new user with $login
                $description = 'User created as guest';
                $date = trim('now'|date('YmdHis'));
                $email = 'cmar-' . substr($date, 3, strlen($date)) . '@' . rand() . '.es';
                $password = trim($login . rand());
                $user_data = $meetingService->createUserInAdo($login, $login, '  ', $description, $email, $password);
                $client = $ado_factory->getClient($email, $password);
                if (!$meetingService->accessControl($meeting, $login, $secret)){//Control después de crear el usuario para la nueva función de qeu todos los usuarios puedan grabar
                    return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => "Do not have privileges for this room"));
                }
                //Loggearse como nuevo usuario
                return array('url' => $meeting->getUrl() . "?session=" . $client->getSession(), 'title' => $meeting->getTitle());
            }
            return $this->render('CmarMeetingBundle:Room:anonymous.html.twig', array('meeting' => $meeting, 'secret' => $secret, 'url' => $request->getpathInfo(), 'asGuest' => $asGuest));
        }

        //Access Control for no Anonymous User
        if (!$meetingService->accessControl($meeting, $user, $secret)){
            return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => "Do not have privileges for this room"));
        }
        $client = $ado_factory->getClient($user->getEmail(), $user->getPassword());
        if ($salt == $meeting->getViewSalt()) {
            try
            {
              $nickname = $repo_nickname->findOneNickNameByUserAndMeeting($user, $meeting);
              if ( $nickname ) {
                $meetingService->changeNickName($nickname->getNickName(), $user);
              }
            } catch (\Exception $e) {
            }
            return array(
                         'url' => $meeting->getUrl() . "?guestName=" . $user->getName() . ' ' .  $user->getSurname(),
                         'title' => $meeting->getTitle()
                         );
        }
        try
          {
            $nickname = $repo_nickname->findOneNickNameByUserAndMeeting($user, $meeting);
            if ( $nickname ) {
              $meetingService->changeNickName($nickname->getNickName(), $user);
            }
          } catch (\Exception $e) {
          }
        return array(
                     'url' => $meeting->getUrl() . "?session=" . $client->getSession(),
                     'title' => $meeting->getTitle()
                     );
    }

}