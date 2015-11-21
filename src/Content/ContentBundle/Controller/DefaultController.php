<?php

namespace Content\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContentContentBundle:Default:index.html.twig');
    }
    
    public function getCuidadorDataAction($idCuidador)
    {
        switch ($idCuidador){
            
            case 1:
                $fotos = array('1.jpg', '2.jpg', '3.jpg');
                $tipoMascota = array(
                    'grande' => 'Si',
                    'mediano' => 'Si',
                    'pequeño' => 'Si',
                    );
                $data = array(
                    'fotoPerfil' => 'perfil-hombre.png',
                    'nombre' => 'Gilberto Orozco Linero',
                    'perfil' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'tipoMascota' => $tipoMascota,
                    'alimentacion' => 'Si',
                    'paseo' => 'Si',
                    'recogidaDomicilio' => 'Si',
                    'genero' => 'Masculino',
                    'reputacion' => '1 2 3 <strong>4</strong> 5',
                    'comentarios' => '',
                    'fotos' => $fotos,
                    'tarifaPorDia' => '70000',
                    'tarifaPorHora' => '10000',
                    'calendario' => '',
                );
                break;
            case 2:
                $fotos = array('1.jpg', '2.jpg');
                $tipoMascota = array(
                    'grande' => 'No',
                    'mediano' => 'Si',
                    'pequeño' => 'Si',
                    );
                $data = array(
                    'fotoPerfil' => 'perfil-mujer.png',
                    'nombre' => 'Wendy Solano',
                    'perfil' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'tipoMascota' => $tipoMascota,
                    'alimentacion' => 'Si',
                    'paseo' => 'No',
                    'recogidaDomicilio' => 'No',
                    'genero' => 'Femenino',
                    'reputacion' => '1 2 3 <strong>4</strong> 5',
                    'comentarios' => '',
                    'fotos' => $fotos,
                    'tarifaPorDia' => '70000',
                    'tarifaPorHora' => '10000',
                    'calendario' => '',
                );
                break;
        }
        return $this->render('ContentContentBundle:Default:informacion-cuidador.html.twig', $data);
    }
}
