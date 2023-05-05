<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class VinylController extends AbstractController
{
    #[Route("/")]
    public function homepage():Response
    {
        return $this->render('vinyl/homepage.html.twig',[
         'title'=>"sra hul ams"
        ]);
    }
    #[Route("/browse/{hell}")]
    public function browse($hell=null):Response
    {       $title=str_replace("-"," ",$hell);
        return new response("this is browse".$title);
    }
    
}

