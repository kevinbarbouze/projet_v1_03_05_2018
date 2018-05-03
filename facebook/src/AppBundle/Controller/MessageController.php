<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Role;


class MessageController extends DefaultController
{

/**
 * @Route("/message", name="message")
 */
public function message(Request $request)
{

 return $this->render('pageMessage.html.twig');
}

}
