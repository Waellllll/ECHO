<?php

namespace App\Controller;
use App\Entity\Conseil;
use App\Entity\Materiel;
use App\Form\MaterielType;
use App\Repository\MaterielRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Service\QrCodeGeneratorService;
#[Route('/materiel')]
final class MaterielController extends AbstractController
{
    #[Route(name: 'app_materiel_index', methods: ['GET'])]
    public function index(MaterielRepository $materielRepository): Response
    {
        return $this->render('materiel/index.html.twig', [
            'materiels' => $materielRepository->findAll(),
        ]);
    }
    #[Route('/{id}/front', name: 'app_materiel_front_index', methods: ['GET'])]
    public function materiels(Conseil $conseil,QrCodeGeneratorService $qrCodeGenerator): Response
    {
        $materiels = $conseil->getMateriels();
        foreach ($materiels as $materiel) {
            $data = sprintf('Materiel: %s, Type: %s, Price: %s', $materiel->getNom(), $materiel->getType(), $materiel->getPrix());
            $materiel->qrCodeUri = $qrCodeGenerator->generateQrCode($data, $materiel->getId());
        }

        return $this->render('materiel/index_front.html.twig', [
            'conseil'   => $conseil,
            'materiels' => $materiels,
        ]);
    }

    #[Route('/new', name: 'app_materiel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,SluggerInterface $slugger): Response
    {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile=$form->get('image')->getData();
            if($imageFile){
                $originalFilename=pathinfo($imageFile->getClientOriginalName(),PATHINFO_FILENAME);//test 123
                $safeFilename=$slugger->slug($originalFilename);//test-123
                $newFilename=$safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();//test-123-9641s5d2669.jpg
                try{
                    $imageFile->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                }catch(\Exception $e){
                    $this->addFlash('error','Could not upload file: '.$e->getMessage());
                }

                $materiel->setImage($newFilename);
            }
            $entityManager->persist($materiel);
            $entityManager->flush();

            return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('materiel/new.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_show', methods: ['GET'])]
    public function show(Materiel $materiel): Response
    {
        return $this->render('materiel/show.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiel_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Materiel $materiel, 
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Could not upload file: '.$e->getMessage());
                }

                $materiel->setImage($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('materiel/edit.html.twig', [
            'materiel' => $materiel,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_delete', methods: ['POST'])]
    public function delete(Request $request, Materiel $materiel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($materiel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
    }
}
