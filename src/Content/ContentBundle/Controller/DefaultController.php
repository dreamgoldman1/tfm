<?php

namespace Content\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContentContentBundle:Default:index.html.twig');
    }
}
