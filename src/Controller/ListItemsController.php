<?php

namespace App\Controller;

use App\Entity\BuyItem;
use App\Form\ListItemsFormType;
use App\Repository\BuyItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListItemsController extends AbstractController
{
    #[Route('/list/items', name: 'list_items')]
    public function buiItem(Request $request,BuyItemRepository $buyItemRepository): Response
    {

        $all_items = $buyItemRepository->findAll();


        $item = new BuyItem();
        $form = $this->createForm(ListItemsFormType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($item);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('list_items');
        }


        return $this->render('list_items/index.html.twig', [
            'itemForm' => $form->createView(),
            'items' => $all_items,
        ]);
    }

}
