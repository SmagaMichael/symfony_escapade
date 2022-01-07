<?php

namespace App\Controller;

use App\Entity\LoveMessage;
use App\Form\LoveMessageFormType;
use App\Repository\LoveMessageRepository;
use DateTime;
use DateTimeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

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
}
