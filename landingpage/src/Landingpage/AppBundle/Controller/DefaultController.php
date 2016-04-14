<?php

namespace Landingpage\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; //@diegotorres50: necesario para las anotaciones de rutas 
use Symfony\Component\HttpFoundation\Response; //@diegotorres50: para el response hello world
use Symfony\Component\HttpFoundation\Request; //@diegotorres50: necesario para validar el login con sesiones

class DefaultController extends Controller
{
	/**
     * @Route("/", name="landingpage_default_homepage") 
     */	
    public function indexAction()
    {
        //return $this->render('LandingpageAppBundle:Default:index.html.twig', array('name' => $name));
        //return new Response('Hello!!');
		return $this->render('LandingpageAppBundle:Default:index.html.twig', array('var' => 'Any Value Here'));        
    }
}