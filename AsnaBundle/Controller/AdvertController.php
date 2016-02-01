<?php
// src/AsnaBundle/Controller/AdvertController.php

namespace AsnaBundle\Controller;

use AsnaBundle\Entity\Advert;
use AsnaBundle\Entity\Application;
use AsnaBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Forms;
use AsnaBundle\Form\AdvertType;

class AdvertController extends Controller
{
  public function addAction(Request $request)
  {
    //on crée un objet Advert
     $advert = new Advert();

     // On crée le FormBuilder grâce au service form factory
     $form = $this->createForm(AdvertType::class, $advert);


     if ($form->handleRequest($request)->isValid()) {
       $em = $this->getDoctrine()->getManager();
       $em->persist($advert);
       $em->persist($advert->getImage());
       $em->flush();

       $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

       return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
     }

     return $this->render('AsnaBundle:Advert:add.html.twig', array(
       'form' => $form->createView(),
     ));
  }
  public function connexionAction(){
      return $this->render('AsnaBundle:Advert:connexion.html.twig');
  }

  public function connectAction(){
      return $this->render('AsnaBundle:Advert:connect.html.twig');
  }
  public function indexAction($page)
  {
    // ...

    // Notre liste d'annonce en dur
    $listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony2',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
    );

    // Et modifiez le 2nd argument pour injecter notre liste
    return $this->render('AsnaBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }

  public function menuAction($limit)
    {
      // On fixe en dur une liste ici, bien entendu par la suite
      // on la récupérera depuis la BDD !
      $listAdverts = array(
        array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
        array('id' => 5, 'title' => 'Mission de webmaster'),
        array('id' => 9, 'title' => 'Offre de stage webdesigner')
      );

      return $this->render('AsnaBundle:Advert:menu.html.twig', array(
        // Tout l'intérêt est ici : le contrôleur passe
        // les variables nécessaires au template !
        'listAdverts' => $listAdverts
      ));
    }


      public function viewAction($id)
      {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $advert = $em
          ->getRepository('AsnaBundle:Advert')
          ->find($id)
        ;

        if (null === $advert) {
          throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        // On récupère la liste des candidatures de cette annonce
        $listApplications = $em
          ->getRepository('AsnaBundle:Application')
          ->findBy(array('advert' => $advert))
        ;

        return $this->render('AsnaBundle:Advert:view.html.twig', array(
          'advert'           => $advert,
          'listApplications' => $listApplications
        ));
      }

  public function editAction($id, Request $request)
  {
    // ...

    $advert = array(
      'title'   => 'Recherche développpeur Symfony2',
      'id'      => $id,
      'author'  => 'Alexandre',
      'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
      'date'    => new \Datetime()
    );

    return $this->render('AsnaBundle:Advert:edit.html.twig', array(
      'advert' => $advert
    ));
  }

  public function deleteAction($id)
  {
    // Ici, on récupérera l'annonce correspondant à $id

    // Ici, on gérera la suppression de l'annonce en question

    return $this->render('AsnaBundle:Advert:delete.html.twig');
  }
}
