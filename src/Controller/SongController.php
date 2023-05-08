<?php

namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class SongController extends AbstractController
{
    #[Route('/Api/Songs/{id<\d+>}', name: 'app_song',methods:'Get')]
    public function getSong( int $id,LoggerInterface $logger): Response
    {
            $song=[
                'id'=>$id,
                'name'=>'waterfalls',
                'url'=>'https://cdn.pixabay.com/audio/2021/09/06/audio_bacd4d6020.mp3',
            ];
            $logger->info('returning api respose for song {song}',[
                'song'=>$id,
            ]);

        return $this->json($song);
        
    }
}
