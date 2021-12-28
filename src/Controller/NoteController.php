<?php

namespace App\Controller;

use App\Entity\CategoryNote;
use App\Form\CategoryNoteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    // #[Route('/note', name: 'note')]
    /**
     * @Route("/note", name="note")
     */
    public function index(): Response
    {
        return $this->render('note/index.html.twig', [
            'controller_name' => 'NoteController',
        ]);
    }





    /**
     * @Route("/admin/create/category/note", name="create_category_note")
     */
    public function create_category_note(Request $request): Response
    {
        $categoryNote = new CategoryNote();


        $form = $this->createForm(CategoryNoteFormType::class, $categoryNote);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoryNote);
            $entityManager->flush();

            return $this->redirecttoRoute('note');
        }

        return $this->render('note/create_category_note.html.twig', [
            'CategoryNoteFormType' => $form->createView(),
        ]);
    }
}
