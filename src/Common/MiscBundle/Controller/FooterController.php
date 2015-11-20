<?php

namespace Common\MiscBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FooterController extends Controller
{
    public function footerAction()
    {
        return $this->render('CommonMiscBundle:Footer:footer.html.twig', array(
                // ...
            ));    }

}
