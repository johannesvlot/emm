<?php

namespace App\Controller;

use App\Entity\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    #[Route('/second', name: 'second')]
    public function index(): Response
    {
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController',
        ]);
    }

}

