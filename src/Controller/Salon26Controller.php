<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Salon26Controller extends AbstractController
{
    #[Route('/', name: 'app_salon26')]
    public function index(): Response
    {
        return $this->render('salon26/index.html.twig', [
            'controller_name' => 'Salon26Controller',
        ]);
    }
}
