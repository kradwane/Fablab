<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AdminBundle\Entity\Enseignant;
use AdminBundle\Form\EnseignantType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Forms;


class EnseignantController extends Controller
{
  public function indexAction()
  {
      return $this->render('AdminBundle:Enseignant:index.html.twig');
  }
  public function addAction(Request $request)
  {
    //on crée un objet Advert
     $enseignant = new Enseignant();
     // On crée le FormBuilder grâce au service form factory
     $form = $this->createForm(EnseignantType::class, $enseignant);

     if ($form->handleRequest($request)->isValid()) {
       $em = $this->getDoctrine()->getManager();
       $em->persist($enseignant);
      // $em->persist($Enseignant->getImage());
       $em->flush();

       $request->getSession()->getFlashBag()->add('notice', 'Enseignant bien enregistrée.');
       return $this->redirect($this->generateUrl('ens_view', array('id' => $enseignant->getId())));
     }

     return $this->render('AdminBundle:Enseignant:add.html.twig', array(
       'form' => $form->createView(),
     ));
  }
  public function editensAction($id,Request $request)
 { // Ici, on récupérera la Enseignant correspondante à $id
   $em = $this->getDoctrine()->getManager();
   // On récupère la Enseignant $id
   $enseignant = $em
     ->getRepository('AdminBundle:Enseignant')
     ->find($id);
   // Même mécanisme que pour l'ajout
   $form = $this->createForm(EnseignantType::class, $enseignant);
   if ($form->handleRequest($request)->isValid()) {
     $em = $this->getDoctrine()->getManager();
     $em->persist($enseignant);
    // $em->persist($Enseignant->getImage());
     $em->flush();
     $request->getSession()->getFlashBag()->add('notice', 'Enseignant bien modifiée.');
     return $this->redirect($this->generateUrl('ens_view', array('id' => $enseignant->getId())));
   }

   return $this->render('AdminBundle:Enseignant:edit.html.twig', array(
     'form' => $form->createView(),
   ));

 }
  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    // On récupère l'enseignant $id
    $enseignant = $em
      ->getRepository('AdminBundle:Enseignant')
      ->find($id)
    ;
    if (null === $enseignant) {
      throw new NotFoundHttpException("L'Enseignant d'id ".$id." n'existe pas.");
    }
    return $this->render('AdminBundle:Enseignant:view.html.twig', array(
      'enseignant'           => $enseignant
    ));
  }

  public function listensAction()
  {
    $repository = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('AdminBundle:Enseignant')
    ;
    $listEnseignants = $repository->findAll();
    return $this->render('AdminBundle:Enseignant:list.html.twig', array(
      'listEnseignants' => $listEnseignants
    ));
  }

public function deleteensAction($id){
  $em = $this->getDoctrine()->getManager();
  $em->remove($em->getRepository('AdminBundle:Enseignant')->find($id));
  $em->flush();
  $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('AdminBundle:Enseignant')
  ;
  $listEnseignants = $repository->findAll();
  return $this->render('AdminBundle:Enseignant:list.html.twig', array(
    'listEnseignants' => $listEnseignants
  ));
}
}
