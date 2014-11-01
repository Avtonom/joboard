<?php

namespace App\JoboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppJoboardBundle:Default:index.html.twig', array('name' => $name));
    }
  
    public function loginAction()
 {
   $request = $this->get('request');
   $session = $this->get('session');

   if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
   } else {
     $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
     $session->remove(SecurityContext::AUTHENTICATION_ERROR);
   }

   return $this->render('AppJoboardBundle:Default:login.html.twig', array(
     'last_username' => $session->get(SecurityContext::LAST_USERNAME),
     'error'         => $error,
   ));
 }
}
