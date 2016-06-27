<?php

namespace PC\ErrorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ErrorBundle:Default:index.html.twig', array('name' => $name));
    }

    public function error404Action()
    {
        return $this->render('ErrorBundle:Default:404.html.twig');
    }

    public function error403Action()
    {
        return $this->render('ErrorBundle:Default:403.html.twig');
    }
}
