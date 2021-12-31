<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoveMessageController extends AbstractController
{
    // #[Route('/love/message', name: 'love_message')]
    /**
     * @Route("/love/message", name="love_message")
     */
    public function index(): Response
    {
        return $this->render('love_message/index.html.twig', [
            'controller_name' => 'LoveMessageController',
        ]);
    }
}
