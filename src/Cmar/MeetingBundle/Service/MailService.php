<?php

namespace Cmar\MeetingBundle\Service;

use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;


/**
 *
 */
class MailService
{
    protected $mailer;
    protected $templating;
    protected $logger;

    public function __construct(\Swift_Mailer $mailer, TwigEngine $templating, LoggerInterface $logger = null) 
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->logger = $logger;
    }
    /*
     * Envia mails a support con el subject indicado, lo usamos para avisar de errores o situaciones de peligro
     *
     */
    public function sendToSupport($subject)
    {
        if ($subject == 'Exceeded maximum number of concurrent rooms') {
            $template_html = 'CmarMeetingBundle:email:email_exceed_meeting.html.twig';
            $template_txt = 'CmarMeetingBundle:email:email_exceed_meeting.txt.twig';
        } elseif ($subject == 'Exceeded maximum number of participants') {
            $template_html = 'CmarMeetingBundle:email:email_exceed_participants.html.twig';
            $template_txt = 'CmarMeetingBundle:email:email_exceed_participants.txt.twig';
        }

        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom(array('no-reply@campusdomar.es' => 'DigiMAR Team'))
            ->setTo(array('sistemas@campusdomar.es', 'support@campusdomar.es'))
            ->setBody($this->templating->render($template_txt))
            ->addPart($this->templating->render($template_html), 'text/html')
            ;
        $this->mailer->send($message);
    }

    /*
     * Envia mails al usuario con el subject indicado, $url se muestra en el mensaje que se envía, lo usamos para cambiar password
     *
     */
    public function send($subject, $user, $url = null)
    { 
        $message = \Swift_Message::newInstance('My subject');
        $message->setSubject($subject . ' - ' . $user->getName() . " " . $user->getSurname());
        $message->setFrom(array('no-reply@campusdomar.es' => 'DigiMAR Team'));
        $message->setTo($user->getEmail());
        $message->setBody($this->templating->render('CmarMeetingBundle:email:email.txt.twig', array('user' => $user, 'url' => $url)));
        $message->addPart($this->templating->render('CmarMeetingBundle:email:email.html.twig', array('user' => $user, 'url' => $url)), 'text/html');
        
        $this->mailer->send($message);
    }

}
