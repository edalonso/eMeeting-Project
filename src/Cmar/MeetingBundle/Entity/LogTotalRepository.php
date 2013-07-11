<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Cmar\MeetingBundle\Entity\LogTotal;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * LogTotalRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LogTotalRepository extends EntityRepository
{

    public function findByMonth($month)
    {
        $interval = new \DateInterval("P1M");                                                                  
        $monthmore = clone $month;
        $monthmore->add($interval);//Sumamos un mes a la fecha  

        return $this->getEntityManager()
            ->createQuery("SELECT m FROM CmarMeetingBundle:Log_Total m 
                           WHERE m.datetime > :month
                           AND m.datetime < :monthmore")
            ->setParameter('month', $month)
            ->setParameter('monthmore', $monthmore)
            ->getResult();      
    }

}