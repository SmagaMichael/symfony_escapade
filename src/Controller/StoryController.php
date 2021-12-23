<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoryController extends AbstractController
{
    #[Route('/story/introduction', name: 'story_introduction')]
    // #[IsGranted('Role_ADMIN')]
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


    #[Route('/story/nouveau_monde', name: 'story_nouveau_monde')]
    public function nouveau_monde(): Response
    {
        return $this->render('story/8_un_nouveau_monde.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/orphelina', name: 'story_orphelina')]
    public function orphelina(): Response
    {
        return $this->render('story/9_lorphelina.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }


    #[Route('/story/vie_quotidienne', name: 'story_vie_quotidienne')]
    public function vie_quotidienne(): Response
    {
        return $this->render('story/10_la_vie_avec_tous_le_monde.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/verite', name: 'story_verite')]
    public function verite(): Response
    {
        return $this->render('story/11_la_verite.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }


    #[Route('/story/plan_2_de_misa', name: 'story_plan_deux_misa')]
    public function plan_de_misa(): Response
    {
        return $this->render('story/12_le_second_plan_de_misa.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/nouvelle_alliee', name: 'story_nouvelle_alliee')]
    public function nouvelle_alliee(): Response
    {
        return $this->render('story/13_une_nouvelle_alliée.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/perfection_plan', name: 'story_perfection_plan')]
    public function perfection_plan(): Response
    {
        return $this->render('story/14_perfection_du_plan.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/diversion', name: 'story_diversion')]
    public function diversion(): Response
    {
        return $this->render('story/15_diversion.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/sauvetage_yuki', name: 'story_sauvetage_yuki')]
    public function sauvetage_yuki(): Response
    {
        return $this->render('story/16_sauvetage_yuki.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/revelation_yuki', name: 'story_revelation_yuki')]
    public function revelation_yuki(): Response
    {
        return $this->render('story/17_revelation_de_yuki.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/desespoir_et_espoir', name: 'story_desespoir_et_espoir')]
    public function desespoir_et_espoir(): Response
    {
        return $this->render('story/18_desespoir_et_espoir.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/evasion', name: 'story_evasion')]
    public function evasion(): Response
    {
        return $this->render('story/19_evasion.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/decouverte', name: 'story_decouverte_du_monde')]
    public function decouverte(): Response
    {
        return $this->render('story/20_decouverte_du_monde_ext.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/reveil', name: 'story_reveil')]
    public function reveil(): Response
    {
        return $this->render('story/21_le_reveil.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/sonju_et_mujika', name: 'story_sonju_et_mujika')]
    public function sonju_et_mujika(): Response
    {
        return $this->render('story/22_sonju_et_mujika.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/revelation_de_sonju', name: 'story_revelation_de_sonju')]
    public function revelation_de_sonju(): Response
    {
        return $this->render('story/23_revelation_de_sonju.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/nouvelle_vie_quotidienne', name: 'story_nouvelle_vie_quotidienne')]
    public function nouvelle_vie_quotidienne(): Response
    {
        return $this->render('story/24_nouvelle_vie_quotidienne.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/vers_le_portail', name: 'story_vers_le_portail')]
    public function vers_le_portail(): Response
    {
        return $this->render('story/25_vers_le_portail.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/surprise', name: 'story_surprise')]
    public function surprise(): Response
    {
        return $this->render('story/26_surprise.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/operation_evasion', name: 'story_operation_evasion')]
    public function operation_evasion(): Response
    {
        return $this->render('story/27_operation_evasion.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/enfin_libre', name: 'story_enfin_libre')]
    public function enfin_libre(): Response
    {
        return $this->render('story/28_enfin_libre.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/entrevue_celeste', name: 'story_entrevue_celeste')]
    public function entrevue_celeste(): Response
    {
        return $this->render('story/29_entrevue_celeste.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/enfin_rentre', name: 'story_enfin_rentre')]
    public function enfin_rentre(): Response
    {
        return $this->render('story/30_enfin_rentre.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/histoire_eternelle', name: 'story_histoire_eternelle')]
    public function histoire_eternelle(): Response
    {
        return $this->render('story/31_histoire_eternelle.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/histoire_eternelle2', name: 'story_histoire_eternelle2')]
    public function histoire_eternelle2(): Response
    {
        return $this->render('story/31_histoire_eternelle2.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }
    #[Route('/story/histoire_eternelle_no', name: 'story_histoire_eternelle_no')]
    public function histoire_eternelle_no(): Response
    {
        return $this->render('story/31_histoire_eternelle_no.html.twig', [
            'controller_name' => 'StoryController',
        ]);
    }

    #[Route('/story/fin', name: 'story_histoire_fin')]
    public function fin(): Response
    {
        return $this->render('story/32_fin.html.twig', [
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
