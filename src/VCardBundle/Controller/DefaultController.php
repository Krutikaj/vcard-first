<?php

namespace VCardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VCardBundle:Default:index.html.twig');
    }
}
