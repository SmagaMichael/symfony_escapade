<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoryController extends AbstractController
{
    #[Route('/story/introduction', name: 'story_introduction')]
    public function index(): Response
    {
        return $this->render('story/1_introduction.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }
}
