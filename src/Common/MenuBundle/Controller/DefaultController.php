<?php

namespace Common\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CommonMenuBundle:Default:index.html.twig', array('name' => $name));
    }
}
