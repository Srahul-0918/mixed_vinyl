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
        return new Response("im Rahul");
    }
    #[Route("/browse/{hell}")]
    public function browse($hell=null):Response
    {       $title=str_replace("-"," ",$hell);
        return new response("this is browse".$title);
    }
    
}

