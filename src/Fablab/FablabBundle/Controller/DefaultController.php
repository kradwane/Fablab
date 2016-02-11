<?php

namespace Fablab\FablabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FablabFablabBundle:Default:index.html.twig');
    }
    public function acceuilAction()
    {
        return $this->render('::layout/acceuil.html.twig');
    }
}
