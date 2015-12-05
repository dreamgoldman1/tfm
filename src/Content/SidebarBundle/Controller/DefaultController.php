<?php

namespace Content\SidebarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $arregloRecomendados = array(
            'recomendado1' => array(
                'foto' => 'foto1',
                'nombre' => 'nombre1',
                'perfil' => 'perfil1',
                'reputacion' => 'reputacion1',
            ),
            'recomendado2' => array(
                'foto' => 'foto2',
                'nombre' => 'nombre2',
                'perfil' => 'perfil2',
                'reputacion' => 'reputacion2',
            ),
            'recomendado3' => array(
                'foto' => 'foto3',
                'nombre' => 'nombre3',
                'perfil' => 'perfil3',
                'reputacion' => 'reputacion3',
            ),
            'recomendado4' => array(
                'foto' => 'foto4',
                'nombre' => 'nombre4',
                'perfil' => 'perfil4',
                'reputacion' => 'reputacion4',
            ),
        );
        return $this->render('ContentSidebarBundle:Default:index.html.twig', array('data' => $arregloRecomendados));
    }
}
