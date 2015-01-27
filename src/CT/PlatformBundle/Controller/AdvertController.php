<?php

// src/CT/PlatformBundle/Controller/AdvertController.php

namespace CT\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('CTPlatformBundle:Advert:index.html.twig', array('nom' => 'Nico'));
    return new Response($content);
  }
}