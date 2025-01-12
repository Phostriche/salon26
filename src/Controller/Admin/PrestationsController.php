<?php

namespace App\Controller\Admin;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Prestations;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PrestationsType;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin/prestations', name: 'app_admin_prestations')]

class PrestationsController extends AbstractController
{
    #[Route('', name: 'app_admin_prestations_index')]

    public function index(): Response
    {
        return $this->render('admin/prestations/index.html.twig', [
            'controller_name' => 'PrestationsController',
        ]);
    }
    #[Route('/new', name: 'app_admin_prestations_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $prestations = new Prestations();
        $form = $this->createForm(PrestationsType::class, $prestations);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($prestations);
            $manager->flush();

            return $this->redirectToRoute('app_prestations');
        }
        return $this->render('admin/prestations/new.html.twig', [
            'form' => $form,
        ]);
    }
}
