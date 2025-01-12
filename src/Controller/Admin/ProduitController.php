<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin/produit', name: 'app_admin_produit')]
class ProduitController extends AbstractController
{
    #[Route('', name: 'app_admin_produit_index')]

    public function index(): Response
    {
        return $this->render('admin/produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/new', name: 'app_admin_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($produit);
            $manager->flush();

            return $this->redirectToRoute('app_produit');
        }


        return $this->render('admin/produit/new.html.twig', [
            'form' => $form,
        ]);
    }
}
