<?php

namespace Cmar\MeetingBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Entity\User;

/**
 * Dumps pumukit user info.
 *
 * @author Ruben Gonzalez <rubenrua@teltek.es>
 */
class addSecretRecordCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
        $this
	  ->setName('cmar:meeting:add_secret_record')
	  ->setDefinition(array(
                          ))
	  ->setDescription('Add secretsalt to recordings that do not have')
	  ->setHelp(<<<EOF

EOF
		    );
  }



  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $logger = $this->getContainer()->get('logger');
    $em = $this->getContainer()->get('doctrine.orm.entity_manager');
    $meetingService = $this->getContainer()->get('cmar_meeting');    

    $logger->info("Exec cmar add secret record");
    $recordings = $em->getRepository('CmarMeetingBundle:Recording')->findAll();

    foreach ($recordings as $recording){
        if ($recording->getSecretSalt() == null){
            $secretsalt = md5(trim($recording->getTitle()) . trim($recording->getUrl()) . rand());
            $recording->setSecretSalt($secretsalt);
            $em->persist($recording);
        }
    }
    $em->flush();    
  }

  
}