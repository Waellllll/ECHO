<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MailController extends AbstractController
{
    #[Route('/test-mail', name: 'test_mail')]
    public function sendTestEmail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('test@example.com')
            ->to('recipient@example.com')
            ->subject('Test de Mailing Symfony')
            ->text('Ceci est un test d\'envoi d\'e-mail avec Symfony et Mailtrap.')
            ->html('<p>Ceci est un <strong>test</strong> d\'envoi d\'e-mail avec Symfony et Mailtrap.</p>');

        $mailer->send($email);

        return new Response('E-mail de test envoyé avec succès !');
    }
}
