<?php

namespace Common\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        $opcionesMenu = array(
            'opcion1' => 'Opcion 1',
            'opcion2' => 'Opcion 2',
            'opcion3' => 'Opcion 3',
            'opcion4' => 'Opcion 4',
            'opcion5' => 'Opcion 5',
            'opcion6' => 'Opcion 6',
        );
        
        return $this->render('CommonMenuBundle:MenuController:menu.html.twig', array(
                'opcionesMenu' => $opcionesMenu
                ));    
        
    }

}
