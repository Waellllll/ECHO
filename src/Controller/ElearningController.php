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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Security;

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

    #[Route('/front', name: 'app_elearning_front', methods: ['GET'])]
    public function front(ElearningRepository $elearningRepository): Response
    {
        return $this->render('elearning/showfront.html.twig', [
            'elearnings' => $elearningRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_elearning_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {

        $elearning = new Elearning();
        $form = $this->createForm(ElearningType::class, $elearning);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Set the creator to the currently logged-in user
            $user = $security->getUser();
            $elearning->setUserE($user); // Use setUserE
    
            /** @var UploadedFile|null $file_path */
            $file_path = $form->get('file_path')->getData();
        
            if ($file_path) { // Handle file upload
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $newFilename = uniqid().'.'.$file_path->guessExtension();
        
                $file_path->move($uploadsDirectory, $newFilename);
                $elearning->setFilePath($newFilename);
            }
        
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
    #[Route('/front/{id}', name: 'app_elearning_showfront', methods: ['GET'])]
    public function showfront(Elearning $elearning): Response
    {
        return $this->render('elearning/details.html.twig', [
            'elearning' => $elearning,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_elearning_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Elearning $elearning, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ElearningType::class, $elearning);
        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) {
    /** @var UploadedFile|null $file_file */
    $file_path = $form->get('file_path')->getData();

    if ($file_path) { // Only process if a file was uploaded
        $uploadsDirectory = $this->getParameter('uploads_directory');
        $newFilename = uniqid().'.'.$file_path->guessExtension();

        $file_path->move($uploadsDirectory, $newFilename);
        $elearning->setFilePath($newFilename);
    }

    $entityManager->persist($elearning);
    $entityManager->flush();

    return $this->redirectToRoute('app_elearning_index', [], Response::HTTP_SEE_OTHER);
}

        return $this->render('elearning/edit.html.twig', [
            'elearning' => $elearning,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_elearning_delete', methods: ['POST'])]
    public function delete(Request $request, Elearning $elearning, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$elearning->getId(), $request->request->get('_token'))) {
            $entityManager->remove($elearning);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_elearning_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}', name: 'app_elearning_deletef', methods: ['POST'])]
    public function deletef(Request $request, Elearning $elearning, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$elearning->getId(), $request->request->get('_token'))) {
            $entityManager->remove($elearning);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_elearning_front', [], Response::HTTP_SEE_OTHER);
    }
}
