<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Client;
use App\Form\ClientType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


#[Route('/admin/client', name: 'app_admin_client')]

class ClientController extends AbstractController

{
    #[Route('', name: 'app_admin_client')]
    public function index(): Response
    {
        return $this->render('admin/client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/new', name: 'app_admin_client_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($client);
            $manager->flush();

            return $this->redirectToRoute('app_client');
        }


        return $this->render('admin/client/new.html.twig', [
            'form' => $form,
        ]);
    }
}
