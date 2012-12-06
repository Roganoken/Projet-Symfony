<?php

namespace Acme\OrchestraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeOrchestraBundle:Default:index.html.twig', array('name' => $name));
    }
}
