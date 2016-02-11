<?php

namespace Calendar\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BladeTester\CalendarBundle\Entity\Event as BaseEvent;

/**
 * Event
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="BladeTester\CalendarBundle\Repository\EventRepository")
 */
class Event extends BaseEvent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

