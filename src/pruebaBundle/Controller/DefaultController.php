<?php

namespace pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('pruebaBundle:Default:index.html.twig', array('name' => $name));
    }
}
