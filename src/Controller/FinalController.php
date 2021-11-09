<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FinalController extends AbstractController
{
    #[Route('/final', name: 'final')]
    public function index(): Response
    {
        return $this->render('final/index.html.twig', [
            'controller_name' => 'FinalController',
        ]);
    }
}
