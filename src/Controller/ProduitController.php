<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/produit')]
class ProduitController extends AbstractController
{

    #[Route('', name: 'app_admin_author_index', methods: ['GET'])]
    public function index(ProduitRepository $repository): Response
    {
        $produit = $repository->findAll();

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            'produit' => $produit,
        ]);
    }
}
