<?php

namespace Golden\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GoldenShopBundle:Default:index.html.twig', array('name' => $name));
    }
}
