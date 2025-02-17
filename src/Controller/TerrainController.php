<?php

namespace App\Controller;

use App\Entity\Terrain;
use App\Form\TerrainType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
final class TerrainController extends AbstractController
{
    #[Route('/ajouterT', name: 'ajouterT')]
    public function index(Request $request , EntityManagerInterface $entityManager): Response
    {
        $crud = new Terrain();    
        $form = $this->createForm(TerrainType::class , $crud );
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
        $uploadedFile = $form['imageFile']->getData();
        if ($uploadedFile) {
            $crud->setImg(file_get_contents($uploadedFile->getPathname()));
            $entityManager->persist($crud);
                $entityManager->flush();
               $this->addFlash('notice','Submitted successfully!!'); 
               return $this->redirectToRoute('terrain_list');
             }}
       return $this->render('terrain/ajoutT.html.twig',[
           'form'=> $form-> createView()
       ]);
    }

    #[Route('/terrains', name: 'terrain_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $images = $entityManager->getRepository(Terrain::class)->findAll();

      
        $imagesData = [];
        foreach ($images as $image) {
            
            
            if (is_resource($image->getImg())) { 
              $imagedata = stream_get_contents($image->getImg()); // Récupère le contenu du flux
            } else { // CAS 2 : Si imagedata est déjà une chaîne (ex: base64)
              $imagedata = $image->getImg();
            }
            $imagesData[] = [
                'id' => $image->getId(),
                'descr' => $image->getDescr(),
                'img' => base64_encode($imagedata), // Encodage en base64
            ];
        }


        return $this->render('terrain/lisTerrain.html.twig', [
            'images' => $imagesData, 
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Request $request , PersistenceManagerRegistry $doctrine,$id)
    {
        $crud = $doctrine->getRepository(Terrain::class)->find($id);
            $em =$doctrine->getManager(); 
            $em->remove($crud);  
            $em->flush();   
            $this->addFlash('notice',' successfully!!'); 
            return $this->redirectToRoute('terrain_list');
        
    }
}
