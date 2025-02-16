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




#[Route('/user')]
final class UserController extends AbstractController
{
    #[Route(name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
{
    $user = new User();
    $form = $this->createForm(UserFormType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Hachage du mot de passe
        $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
        $user->setPassword($hashedPassword);

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_user_index');
    }

    return $this->render('user/new.html.twig', [
        'user' => $user,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager,UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    
    #[Route('/delete/{id}', name: 'app_user_delete', methods: ['GET'])]
    public function delete(User $user, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
    
        return $this->redirectToRoute('app_user_index');
    }
    #[Route('/profile/{id}', name: 'app_user_profile', methods: ['GET', 'POST'])]
    public function profile(Request $request, EntityManagerInterface $entityManager, User $user,UserPasswordHasherInterface $passwordHasher): Response
    {
        // Vérification de l'utilisateur connecté
        $connectedUser = $this->getUser();

        if (!$connectedUser || $connectedUser->getId() !== $user->getId()) {
            return $this->redirectToRoute('app_login'); // Rediriger si l'utilisateur essaie d'accéder à un autre profil
        }

        // Créer un formulaire pour mettre à jour les informations de l'utilisateur
        $form = $this->createForm(UserFormType::class, $user, [
            'is_profile_page' => true,]);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide, sauvegarder les données mises à jour
        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour.');
        }

        // Rendre la page du profil avec les informations de l'utilisateur et le formulaire
        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    // Suppression du compte de l'utilisateur authentifié
    #[Route('/profile/delete/{id}', name: 'app_user_delete_self', methods: ['POST'])]
    public function deleteSelf(EntityManagerInterface $entityManager, Request $request, User $user): Response
    {
        // Vérification de l'utilisateur connecté
        $connectedUser = $this->getUser();

        if (!$connectedUser || $connectedUser->getId() !== $user->getId()) {
            return $this->redirectToRoute('app_login'); // Rediriger si l'utilisateur essaie de supprimer un autre compte
        }

        // Vérifier le token CSRF pour la sécurité
        if ($this->isCsrfTokenValid('delete_account', $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('danger', 'Votre compte a été supprimé.');

            return $this->redirectToRoute('app_login'); // Redirection vers login après suppression
        }

        return $this->redirectToRoute('app_user_profile', ['id' => $user->getId()]);
    }


}
