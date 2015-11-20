<?php

namespace Content\SidebarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContentSidebarBundle:Default:index.html.twig');
    }
}
