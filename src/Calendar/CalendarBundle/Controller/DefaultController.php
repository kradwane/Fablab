<?php

namespace Calendar\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CalendarCalendarBundle:Default:index.html.twig', array('name' => $name));
    }
}
