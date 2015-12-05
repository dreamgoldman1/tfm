<?php

namespace Common\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        $opcionesMenu = array(
            'home' => 'Inicio',
            'buscar' => 'Buscar',
        );
        
        return $this->render('CommonMenuBundle:MenuController:menu.html.twig', array(
                'opcionesMenu' => $opcionesMenu
                ));    
        
    }

}
