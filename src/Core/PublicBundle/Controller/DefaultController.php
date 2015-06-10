<?php

namespace Core\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CorePublicBundle:Default:index.html.twig', array(
            'theme'=>'default'
        ));
    }
}
