<?php

namespace App\Controller;

use App\Entity\CategoryNote;
use App\Entity\Note;
use App\Form\CategoryNoteFormType;
use App\Form\NoteFormType;
use App\Repository\CategoryNoteRepository;
use App\Repository\NoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    /**
     * @Route("/note", name="note")
     */
    public function index(NoteRepository $noteRepository, CategoryNoteRepository $categoryNoteRepository): Response
    {

        $notes = $noteRepository->findAll();
        $categoriesNotes = $categoryNoteRepository->findAll();

        // dd($notes);

        return $this->render('note/index.html.twig', [
            'notes' =>  $notes,
            'categories' => $categoriesNotes
        ]);
    }


    /**
     * @Route("/admin/create/note", name="create_note")
     */
    public function create_note(Request $request): Response
    {
        $note = new Note();

        $form = $this->createForm(NoteFormType::class, $note);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($note);
            $entityManager->flush();

            return $this->redirecttoRoute('note');
        }

        return $this->render('note/create_note.html.twig', [
            'NoteFormType' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/edit/note/{id}", name="edit_note")
     */
    public function edit_note($id, Request $request, NoteRepository $noteRepository, EntityManagerInterface $manager): Response
    {
        $note = $noteRepository->find($id);
        $form = $this->createForm(NoteFormType::class, $note);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $manager->persist($note);
            $manager->flush();
            return $this->redirectToRoute('note');
        }
        $formView = $form->createView();

        return $this->render('note/edit_note.html.twig', [
            'note' => $note,
            'NoteFormType' => $formView,
        ]);
    }

    /**
     * @Route("/admin/delete/note/{id}", name="delete_note")
     */
    public function delete_note(Note $note): Response
    {
         // Pour supprimer avec Doctrine
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->remove($note);

         $entityManager->flush(); 
  
         return $this->redirectToRoute('note');
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

    /**
     * @Route("/admin/edit/category/note/{id}", name="edit_category_note")
     */
    public function edit_category_note($id, Request $request, CategoryNoteRepository $categoryNoteRepository, EntityManagerInterface $manager): Response
    {
        $category = $categoryNoteRepository->find($id);
        $form = $this->createForm(CategoryNoteFormType::class, $category);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $manager->persist($category);
            $manager->flush();
            return $this->redirectToRoute('note');
        }
        $formView = $form->createView();

        return $this->render('note/edit_category_note.html.twig', [
            'category' => $category,
            'CategoryNoteFormType' => $formView,
        ]);
    }


    /**
     * @Route("/admin/delete/category/note/{id}", name="delete_category_note")
     */
    public function delete_category_note(CategoryNote $categoryNote): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
         $entityManager->remove($categoryNote);

         $entityManager->flush(); 
  
         return $this->redirectToRoute('note');
    }
}
