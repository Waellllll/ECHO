<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\UserFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolve;

final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard' , methods: ['GET'] )]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
    
        // Initialiser les compteurs
        $professionnelsCount = 0;
        $amateursCount = 0;
    
        // Compter les utilisateurs par rôle
        foreach ($users as $user) {
            if (in_array('ROLE_PROFESSIONNEL', $user->getRoles())) {
                $professionnelsCount++;
            }
            if (in_array('ROLE_AMATEUR', $user->getRoles())) {
                $amateursCount++;
            }
        }
       
        // Passer les données au fichier .twig
        return $this->render('user/dashboard.html.twig', [
            'professionnelsCount' => $professionnelsCount,
            'amateursCount' => $amateursCount,
        ]);
    }
}
