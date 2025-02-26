<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Psr\Log\LoggerInterface;


final class MailController extends AbstractController
{        #[Route('/send-email', name: 'send_email')]

    public function sendEmail(MailerInterface $mailer, LoggerInterface $logger)
    {
        $email = (new Email())
            ->from('najaranas1011@gmail.com')  // même adresse que dans MAILER_DSN
            ->to('anasnajar962@gmail.com')
            ->subject('Test Symfony Mailer')
            ->text('Ceci est un email de test envoyé avec Symfony.');


        $logger->info('Envoi de l\'email...');

        try {
            $mailer->send($email);
            $logger->info('Email envoyé avec succès!');
            return $this->json(['message' => 'Email envoyé avec succès !']);
        } catch (\Exception $e) {
            $logger->error('Erreur lors de l\'envoi de l\'email: '.$e->getMessage());
            return $this->json(['message' => 'Erreur lors de l\'envoi de l\'email']);
        }
    }
}
