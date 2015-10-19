<?php

namespace Fablab\FablabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FablabFablabBundle:Default:materiel/layout/materiel.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('FablabFablabBundle:Default:materiel/layout/presentation.html.twig');
    }

}
