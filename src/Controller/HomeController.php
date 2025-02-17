<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/homeback', name: 'homeback')]
    public function index(): Response
    {
        return $this->render('baseback.html.twig');
    }
    #[Route('/home', name: 'home')]
    public function index1(): Response
    {
        return $this->render('base.html.twig');
    }
}
