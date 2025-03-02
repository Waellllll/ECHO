<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolve;
class SecurityController extends AbstractController
{   
    
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Check if the user is already authenticated
        if ($this->getUser()) {
            // Get the authenticated user
            $user = $this->getUser();
            
            // Redirect based on the user's role
            if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
                return $this->redirectToRoute('app_dashboard'); // Redirect to Back-Office for admin
            }
            
            // Redirect to Front-Office for regular users
            return $this->redirectToRoute('home'); 
        }
    
        // Retrieve any authentication error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // Get the last username entered
        $lastUsername = $authenticationUtils->getLastUsername();
    
        // Render the login form with the last username and error message
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error
        ]);
    }
    
   

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
