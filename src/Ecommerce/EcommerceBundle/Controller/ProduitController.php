<?php
/*$mehdi='je suis don';
        return $this->render('EcommerceBundle:Default:produit.html.twig', array('name' => $name,
                                                                              'mehdi'=>$mehdi,
                                                                              'firstname'=>$firstname));*/
//  return new response('mlkfdksmk');
namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ProduitController extends Controller
{
    public function produitAction()
    {
        return $this->render("EcommerceBundle:Default:produit.html.twig");
    }

}


