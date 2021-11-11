<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoryController extends AbstractController
{
    #[Route('/story/introduction', name: 'story_introduction')]
    public function intro(): Response
    {
        return $this->render('story/1_introduction.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/le_plan_de_misa', name: 'story_plan_misa')]
    public function plan_misa(): Response
    {
        return $this->render('story/2_le_plan_de_misa.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/ingredients', name: 'story_ingredients')]
    public function ingredient(): Response
    {
        return $this->render('story/3_les_ingredients.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/ingredients2', name: 'story_ingredients_2')]
    public function ingredient_2(): Response
    {
        return $this->render('story/4_les_ingredients_2.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/rassemblement', name: 'story_rassemblement')]
    public function rassemblement(): Response
    {
        return $this->render('story/5_le_rassemblement.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/transformation', name: 'story_transformation')]
    public function transformation(): Response
    {
        return $this->render('story/6_la_transformation.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/nouveau_corps', name: 'story_nouveau_corps')]
    public function nouveau_corps(): Response
    {
        return $this->render('story/7_un_nouveau_corps.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }









    #[Route('/story/le_tresor_de_lescapade', name: 'story_tresor_escapade')]
    public function le_tresor(): Response
    {
        return $this->render('story/999_le_tresor_de_l\'escapade.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }
}
