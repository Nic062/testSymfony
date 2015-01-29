<?php

// src/CT/PlatformBundle/Controller/AdvertController.php

namespace CT\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function viewSlugAction($slug, $year, $format){
    return new Response(
        "On pourrait afficher l'annonce correspondant au
        slug '".$slug."', créée en ".$year." et au format ".$format."."
    );
  }

  public function viewAction($id)
  {
    return new Response("Affichage de l'annonce d'id : ".$id);
  }
  public function indexAction()
  {
    $content = $this->get('templating')->render('CTPlatformBundle:Advert:index.html.twig', array('nom' => 'Nico'));
    return new Response($content);
  }
}