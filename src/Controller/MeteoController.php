<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeteoController extends AbstractController
{
    // #[Route('/meteo', name: 'meteo')]
    /**
     * @Route("/meteo", name="meteo")
     */
    public function index(): Response
    {
        return $this->render('meteo/index.html.twig', [
            'controller_name' => 'MeteoController',
        ]);
    }
}
