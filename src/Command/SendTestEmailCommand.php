<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsCommand(name: 'app:send-test-email')]
class SendTestEmailCommand extends Command
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = (new Email())
            ->from('najaranas1011@gmail.com')
            ->to('mohamedanas.najar@esprit.tn')
            ->subject('Test d\'envoi Symfony Mailer')
            ->text('Ceci est un test d\'envoi d\'e-mail avec Symfony.')
            ->html('<p>Ceci est un <strong>test</strong> d\'envoi d\'e-mail avec Symfony.</p>');

        $this->mailer->send($email);

        $output->writeln('📧 E-mail envoyé avec succès !');
        return Command::SUCCESS;
    }
}
