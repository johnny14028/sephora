<?php

namespace Core\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Core\SecurityBundle\Form\LoginType as Login;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('CoreSecurityBundle:Default:index.html.twig', array(
                    'theme' => 'default'
        ));
    }

    public function loginAction(Request $request) {
        $session = $request->getSession();
        //obtenemos el formulario login
        $formLogin = $this->createForm(new Login());
        //obtenemos si es que existe un error
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
//        $objResource = new Resource();
//        $objResource->setContainer($this->container);
//        return $this->render(
//            'PucpSecurityBundle:Default:index.html.twig', array(
//                //obtenemos el último usuario ingresado
//                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
//                'error'         => $error,
//                'form'          => $formLogin->createView(),
//                'theme'         => 'bcp'//$objResource->getConfig('Theme')
//            )
//        );        
        return $this->render('CoreSecurityBundle:Default:login.html.twig', array(
                    'theme' => 'default',
                    'form' => $formLogin->createView(),
                    'error' => $error,
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME)
        ));
    }
    
    public function ajaxAction(){
        
    }

}
