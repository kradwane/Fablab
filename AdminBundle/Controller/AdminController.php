<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AdminBundle\Entity\Machine;
use AdminBundle\Form\MachineType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Forms;


class AdminController extends Controller
{
  public function indexAction()
  {
      return $this->render('AdminBundle:Admin:index.html.twig');
  }
  public function addAction(Request $request)
  {
    //on crée un objet Advert
     $machine = new Machine();

     // On crée le FormBuilder grâce au service form factory
     $form = $this->createForm(MachineType::class, $machine);


     if ($form->handleRequest($request)->isValid()) {
       $em = $this->getDoctrine()->getManager();
       $em->persist($machine);
      // $em->persist($machine->getImage());
       $em->flush();

       $request->getSession()->getFlashBag()->add('notice', 'Machine bien enregistrée.');

       return $this->redirect($this->generateUrl('platform_view', array('id' => $machine->getId())));
     }

     return $this->render('AdminBundle:Admin:add.html.twig', array(
       'form' => $form->createView(),
     ));
  }
  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $machine = $em
      ->getRepository('AdminBundle:Machine')
      ->find($id)
    ;
    if (null === $machine) {
      throw new NotFoundHttpException("La machine d'id ".$id." n'existe pas.");
    }
    return $this->render('AdminBundle:Admin:view.html.twig', array(
      'machine'           => $machine
    ));
  }

  public function listAction()
  {

    $repository = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('AdminBundle:Machine')
    ;

    $listMachines = $repository->findAll();
    return $this->render('AdminBundle:Admin:list.html.twig', array(
      'listMachines' => $listMachines
    ));
  }
public function deleteAction($id){
  $em = $this->getDoctrine()->getManager();
  $em->remove($em->getRepository('AdminBundle:Machine')->find($id));
  $em->flush();

    return $this->render('AdminBundle:Admin:list.html.twig');
}
}
