<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/homeback', name: 'app_homeback')]
    public function index1(): Response
    {
        return $this->render('baseback.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
