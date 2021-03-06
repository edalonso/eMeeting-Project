<?php

namespace Cmar\MeetingBundle\Service;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Entity\NickName;


class MeetingService
{
    private $doctrine;
    private $adoAdmin;
    private $concurrentRooms = null;
    private $numRooms = null;
    private $numRoomsForNonMagic = null;
    private $logger;

    public function __construct(RegistryInterface $doctrine, AdoAdminInterface $adoAdmin, 
                                $concurrentRooms, $numRooms, $numRoomsForNonMagic,
                                LoggerInterface $logger = null) 
    {
        $this->logger = $logger;
        $this->doctrine = $doctrine;
        $this->adoAdmin = $adoAdmin;
        $this->concurrentRooms = $concurrentRooms;
        $this->numRooms = $numRooms;
        $this->numRoomsForNonMagic = $numRoomsForNonMagic;

    }

    /*
     * Obtener el número de simultáneas
     * Get concurrentRooms
     */

    public function getconcurrentRooms() 
    {
        return $this->concurrentRooms;
    }


    /*
     * Obtener el número de salas disponibles en ADO totales
     * Get NumRooms
     */

    public function getNumRooms() 
    {
        return $this->numRooms;
    }


    /*
     * Obtener el número de salas disponibles en ADO para usuarios no VIP
     * Get numRoomsForNonMagic
     */

    public function getnumRoomsForNonMagic() 
    {
        return $this->numRoomsForNonMagic;
    }


    /**
     *
     */
    public function create(Meeting $meeting)
    {
        //TODO Check is future. No se pueden crear Meeting para el pasado.
        //TODO introducir el concepto de Salt y SecretSalt en el create para futuros meetings
        $em = $this->doctrine->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');       

        $meeting->setState(Meeting::STATE_SCHEDULED);
        
        $em = $this->doctrine->getEntityManager();
        $em->persist($meeting);

        $em->flush();
        
        return $meeting;
    }
    

    /**
     *
     * int duration
     * User $user
     * boolean permission
     * array $items
     * string $description
     *
     */
    public function createMeeting($title, User $user, $nick, $permission, $description = null, $magic = false, $salt = null, $group = null)
    {
        $em = $this->doctrine->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:NickName');
        $repo_meeting = $em->getRepository('CmarMeetingBundle:Meeting');

        $num_active_meetings = count($repo_meeting->findByStatesAndUser(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), $user));

        $meeting = new Meeting();
        if($salt){
            $meeting->setSalt(preg_replace('/[^a-z0-9_-]/i', '', $salt));
        }else{
            $meeting->setSalt(preg_replace('/[^a-z0-9_-]/i', '', $title));
        }
        $meeting->setSecretSalt($this->udpateSecretSalt($meeting));
        $meeting->setViewSalt($this->udpateViewSalt($meeting));
        $meeting->setTitle($title);
        if ($group != null){
            $meeting->setGroup($group);
        }
        $meeting->setDate(new \DateTime("now"));
        $meeting->setPublic($permission);
        $meeting->setMagic($magic);
        if ($description != null){
            $meeting->setDescription($description);
        }
        $meeting->setOwner($user);

        $this->start($meeting);
        
        $nickname = new nickname();
        $nickname->setMeeting($meeting);
        $nickname->setUser($user);
        $nickname->setNickName($nick);
        $rank = $num_active_meetings+1;
        $nickname->setRank($rank);
        $em->persist($nickname);

        $em->flush();

        return $meeting;
    }

    /**
     * Crea un meeting en el ADO y lo almacena en la BBDD
     *
     */
    public function start(Meeting $meeting)
    {
        $em = $this->doctrine->getEntityManager();

        $url = $this->adoAdmin->createMeeting($meeting->getTitle(), 'cmar-' . $meeting->getSecretSalt(),
                                              $meeting->getDate(), $meeting->getOwner()->getEmail(), $meeting->getPublic());

        $meeting->setState(Meeting::STATE_NOW);
        $meeting->setUrl($url);
        $em->persist($meeting);
        $em->flush();
    }

    /**
     *
     */
    public function stop(Meeting $meeting, $state = Meeting::STATE_FINISHED)
    {
        $em = $this->doctrine->getEntityManager();        

        $recordings = $this->adoAdmin->deleteMeetingByUrl($meeting->getUrl());
        $aux_recordings = $meeting->getRecordings();
        foreach($recordings as $recording){
            $copy = true;
            foreach ($aux_recordings as $aux_recording) {//Evitamos copiar las grabaciones ya copiadas antes
                if ($aux_recording->getTitle() == $recording["TITLE"] AND $copy) {
                    $copy = false;
                }
            }
            if ($copy){
                $recording1 = new Recording;
                $recording1->setTitle($recording["TITLE"]);
                $recording1->setUrl($recording["URL"]);
                $recording1->setDateCreated($recording["DATETIMECREATED"]);
                $recording1->setMeeting($meeting);
                $em->persist($recording1);
            }
        }
        $meeting->setState($state);
        
        $em->persist($meeting);
        $em->flush();
    }

    /**
     * Delete Nickname from the database nickname
     */
    public function deleteFromNickname(Meeting $meeting)
    {
        $em = $this->doctrine->getEntityManager();        

        $repo_meeting = $em->getRepository('CmarMeetingBundle:Meeting');
        $nicknames = $meeting->getNickNames();

        foreach($nicknames as $nickname){
            $meeting->removeNickname($nickname);
            $em->remove($nickname);
        }
        
        $em->persist($meeting);
        $em->flush();
    }

    /**
     *
     * Meeting $meeting
     * array $users
     */
    public function addUsers(Meeting $meeting, $users)
    {

        $em = $this->doctrine->getEntityManager();
        $repo_meeting = $em->getRepository('CmarMeetingBundle:Meeting');

        $nicknames = $meeting->getNickNames();

        foreach ($nicknames as $nickname){
            $is_part_of_meeting = false;
            foreach ($users as $user){
                if ($nickname->getUser() == $user) {
                    $is_part_of_meeting = true;
                }
            }
            
            if(!$is_part_of_meeting AND $nickname->getUser() != $meeting->getOwner()){
                $meeting->removeNickname($nickname);
                $em->remove($nickname);
            }
        }


        $em->persist($meeting);
        $em->flush();

        foreach ($users as $user){
            $is_new = true;
            foreach ($nicknames as $nickname){
                if ($nickname->getUser() == $user) {
                    $is_new = false;
                }
            }
            
            if($is_new){
                $nickname_add = new nickname();
                $nickname_add->setMeeting($meeting);
                $nickname_add->setUser($user);
                $nickname_add->setNickName($user->getName() . ' ' . $user->getSurname());
                $num_active_meetings = count($repo_meeting->findByStatesAndUser(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), $user));
                $rank = $num_active_meetings+1;
                $nickname_add->setRank($rank);
                $meeting->addNickname($nickname_add);
            }
        }

        foreach ($meeting->getUsers() as $user){//Se borran todos menos el Owner del eMeeting
            if ($meeting->getOwner() != $user) {
                $meeting->removeUser($user);
            }
        }

        $em->persist($meeting);
        $em->flush();

        foreach ($users as $user){// Solo se añade si no es el Owner del eMeeting
            if ($meeting->getOwner() != $user) {
                $meeting->addUser($user);
            }
        }
        
        $em->persist($meeting);
        $em->flush();
        
    }

    /**
     *
     * Meeting $meeting
     * array $users
     */
    public function createUserInAdo($login, $first_name, $last_name, $description, $email, $password)
    {

        $xml = $this->adoAdmin->principalUpdate($login, $email, $password, $first_name, $last_name, $description);

        return $xml;
    }


    /**
     *
     */
    public function reportActiveMeetings()
    {
        $xml = $this->adoAdmin->reportActiveMeetings();

        return $xml;

    }

    /**
     * Control de errores para meeting devuelve true si se puede acceder o false en caso contrario
     *
     */
    public function accessControl(Meeting $meeting, $user, $secret)
    {
        $em = $this->doctrine->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');
        $access = true;

        if ($user instanceof User){
            if (!$meeting->getPublic() AND !$meeting->containsUser($user) AND ($meeting->getOwner() != $user) AND !$secret) {
                $access = false;
            } else {
                if ($meeting->isLocked()){
                    $access = false;
                } elseif ($meeting->isCanRecord()){
                    $parse = parse_url($meeting->getUrl());
                    $xml = $this->adoAdmin->getScoByUrl($meeting->getUrl());
                    $sco_id = (string) $xml->{'sco'}->attributes()->{"sco-id"};
                    $sal = $this->adoAdmin->changeUserPermInMeeting($sco_id, $user->getId(), 'host');
                } elseif ($meeting->getOwner()->getId() != $user->getId()){
                    $parse = parse_url($meeting->getUrl());
                    $xml = $this->adoAdmin->getScoByUrl($meeting->getUrl());
                    $sco_id = (string) $xml->{'sco'}->attributes()->{"sco-id"};
                    $sal = $this->adoAdmin->changeUserPermInMeeting($sco_id, $user->getId(), 'mini-host');
                }

            }
        } elseif ($meeting->isLocked()){
            $access = false;
        } else {//Usuario anónimo
            if (!$secret AND !$meeting->getPublic()) {
                $access = false;
            } elseif ($meeting->isCanRecord()){//Entrada para usuarios anónimos cuando todos los usuarios pueden grabar el meeting
                $parse = parse_url($meeting->getUrl());
                $xml = $this->adoAdmin->getScoByUrl($meeting->getUrl());
                $sco_id = (string) $xml->{'sco'}->attributes()->{"sco-id"};
                $principal_id_user = $this->adoAdmin->principalFindByName($user);
                $sal = $this->adoAdmin->changeUserPermInMeeting($sco_id, $principal_id_user, 'host');
            }
        }
        return $access;
    }

    /**
     * Change Nick Name in ADO
     *
     */
    public function changeNickName($NickName, $user)
    {
        $em = $this->doctrine->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');
        

        $id_user = $this->adoAdmin->principalFindByEmail($user->getEmail());
        $sal = $this->adoAdmin->changeNickName($user->getLogin(), $user->getEmail(), $user->getPassword(), $NickName, '  ', $id_user);

    }

    /**
     * Update Meeting's SecretSalt
     * Meeting $meeting
     *
     */
    public function udpateSecretSalt(Meeting $meeting)
    {
        $secret = md5($meeting->getTitle() . rand());
        return $secret;
    }

    /**
     * Update Meeting's ViewSalt
     * Meeting $meeting
     *
     */
    public function udpateViewSalt(Meeting $meeting)
    {
        $secret = md5($meeting->getTitle() . $meeting->getOwner() . rand());
        return $secret;
    }

    /**
     * Update User Password
     * User $user
     * $password
     * $session
     */
    public function updateUserPassword(User $user, $password)
    {
        $id_user = $this->adoAdmin->principalFindByEmail($user->getEmail());
        $xml = $this->adoAdmin->updateUserPassword($user, $password, $id_user);

        return $xml;
    }

}

