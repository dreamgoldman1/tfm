<?php

namespace HolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiciosController extends Controller
{
    public function indexAction()
    {
        return $this->render('HolaBundle:Servicios:index.html.twig', array(
                // ...
            ));    }

}
