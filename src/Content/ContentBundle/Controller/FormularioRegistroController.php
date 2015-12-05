<?php

namespace Content\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormularioRegistroController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContentContentBundle:FormularioRegistro:index.html.twig', array(
                // ...
            ));    }

}
