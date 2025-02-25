<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Address;


class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passwordHasher,  MailerInterface $mailer ): Response {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user, [
            'is_registration' => true,  ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hachage du mot de passe
            $hashedPassword = $passwordHasher->hashPassword($user, $form->get('password')->getData());
            $user->setPassword($hashedPassword);

            // Sauvegarde de l'utilisateur en base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // 📩 Envoi de l'email de confirmation
            $email = (new Email())
                 ->from(new Address('najaranas1011@gmail.com'))                
                 ->to($user->getEmail()) // Email saisi lors de l'inscription
                 ->subject('Bienvenue sur GreenBridge ! 🎉')
                 ->html("<h2>Bienvenue, {$user->getNom()} !</h2><p>Merci de vous être inscrit sur GreenBridge. Nous sommes ravis de vous compter parmi nous.</p>");

            $mailer->send($email);

            // Message flash et redirection
            $this->addFlash('success', 'Inscription réussie ! Un email de confirmation vous a été envoyé.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('register/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
