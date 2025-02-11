<?php

namespace App\Controller;

use App\Entity\Elearning;
use App\Form\ElearningType;
use App\Repository\ElearningRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/elearning')]
final class ElearningController extends AbstractController
{
    #[Route(name: 'app_elearning_index', methods: ['GET'])]
    public function index(ElearningRepository $elearningRepository): Response
    {
        return $this->render('elearning/index.html.twig', [
            'elearnings' => $elearningRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_elearning_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $elearning = new Elearning();
        $form = $this->createForm(ElearningType::class, $elearning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($elearning);
            $entityManager->flush();

            return $this->redirectToRoute('app_elearning_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('elearning/new.html.twig', [
            'elearning' => $elearning,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_elearning_show', methods: ['GET'])]
    public function show(Elearning $elearning): Response
    {
        return $this->render('elearning/show.html.twig', [
            'elearning' => $elearning,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_elearning_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Elearning $elearning, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ElearningType::class, $elearning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_elearning_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('elearning/edit.html.twig', [
            'elearning' => $elearning,
            'form' => $form,
        ]);
    }
-02
    #[Route('/{id}', name: 'app_elearning_delete', methods: ['POST'])]
    public function delete(Request $request, Elearning $elearning, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$elearning->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($elearning);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_elearning_index', [], Response::HTTP_SEE_OTHER);
    }
}

