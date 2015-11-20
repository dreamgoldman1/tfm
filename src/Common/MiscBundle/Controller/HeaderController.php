<?php

namespace Common\MiscBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HeaderController extends Controller
{
    public function headerAction()
    {
        return $this->render('CommonMiscBundle:Header:header.html.twig', array(
                // ...
            ));    }

}
