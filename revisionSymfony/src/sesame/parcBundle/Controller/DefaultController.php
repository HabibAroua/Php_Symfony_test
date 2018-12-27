<?php

namespace sesame\parcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sesameparcBundle:Default:index.html.twig');
    }
}
