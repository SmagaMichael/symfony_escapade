<?php

namespace App\Controller;

use DateTime;
use DateTimeInterface;
use App\Entity\LoveMessage;
use App\Form\LoveMessageFormType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LoveMessageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoveMessageController extends AbstractController
{
    // #[Route('/love/message', name: 'love_message')]
    /**
     * @Route("/love/message", name="love_message")
     */
    public function index(Request $request, LoveMessageRepository $loveMessageRepository): Response
    {
        $all_message = $loveMessageRepository->findAll();
        $countMessages = count($all_message);
     
        $message = new LoveMessage();
        $form = $this->createForm(LoveMessageFormType::class, $message);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $datetime = new \DateTime();
            $message->setTime($datetime);
            $message->setWriterMessage($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('love_message');
        }

        return $this->render('love_message/index.html.twig', [
            'messages' =>  $all_message,
            'countMessages' =>  $countMessages,
            'messageForm' => $form->createView(),
        ]);
    }


        /**
     * @Route("/admin/edit/message/{id}", name="edit_message")
     */
    public function edit_note($id, Request $request, LoveMessageRepository $loveMessageRepository, EntityManagerInterface $manager): Response
    {

        $all_message = $loveMessageRepository->findAll();
        $countMessages = count($all_message);

        $message = $loveMessageRepository->find($id);
        $form = $this->createForm(LoveMessageFormType::class, $message);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $manager->persist($message);
            $manager->flush();
            return $this->redirectToRoute('love_message');
        }
        $formView = $form->createView();

        return $this->render('love_message/edit_message.html.twig', [
            'messages' =>  $all_message,
            'countMessages' =>  $countMessages,
            'message' => $message,
            'messageForm' => $formView,
        ]);
    }

    /**
     * @Route("/admin/delete/message/{id}", name="delete_message")
     */
    public function delete_note(LoveMessage $loveMessage): Response
    {
         // Pour supprimer avec Doctrine
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->remove($loveMessage);

         $entityManager->flush(); 
  
         return $this->redirectToRoute('love_message');
    }
}
