<?php

namespace App\Controller;

use App\Entity\Terrain;
use App\Entity\Intervention;
use App\Entity\User;
use App\Form\TerrainType;
use App\Form\InterventionType;
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
            $crud->setIdUser($this->getUser());
            $entityManager->persist($crud);
                $entityManager->flush();
               $this->addFlash('notice','Submitted successfully!!'); 
               return $this->redirectToRoute('terrain_list');
             }}
       return $this->render('terrain/ajoutTerrain.html.twig',[
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
              $imagedata = stream_get_contents($image->getImg());
            } else { 
              $imagedata = $image->getImg();
            }
            $imagesData[] = [
                'id' => $image->getId(),
                'descr' => $image->getDescr(),
                'img' => base64_encode($imagedata),
                'iduser' => $image->getIduser()->getId() ,
                'nom' => $image->getIduser()->getNom(),
                'prenom' => $image->getIduser()->getPrenom(),
            ];
        }


        return $this->render('terrain/listTerrain.html.twig', [
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

    #[Route('/edit/{id}', name: 'edit')]
    public function update(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        
        $terrain = $entityManager->getRepository(Terrain::class)->find($id);
        if (!$terrain) {
            $this->addFlash('error', 'Terrain introuvable.');
            return $this->redirectToRoute('terrain_list');
        }
    
        $form = $this->createForm(TerrainType::class, $terrain);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile) {
                $terrain->setImg(file_get_contents($uploadedFile->getPathname()));
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Terrain mis à jour avec succès.');
            return $this->redirectToRoute('terrain_list');
        }
        return $this->render('terrain/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    


    #[Route('/intervention/{idT}/{userId}', name: 'intervention')]
    public function intervenir(Request $request, EntityManagerInterface $entityManager, $idT,$userId)
    {
    $terrain = $entityManager->getRepository(Terrain::class)->find($idT);
    $interventions = $entityManager->getRepository(Intervention::class)->findBy([
        'terrain' => $idT,
        'user' => $userId
    ]);
    $imagesData = [];
  

   
        if (is_resource($terrain->getImg())) { 
          $imagedata = stream_get_contents($terrain->getImg());
        } else { 
          $imagedata = $terrain->getImg();
        }
        $imagesData[] = [
            'id' => $terrain->getId(),
            'descr' => $terrain->getDescr(),
            'img' => base64_encode($imagedata),
            'iduser' => $terrain->getIduser()->getId() ,
            'nom' => $terrain->getIduser()->getNom(),
            'prenom' => $terrain->getIduser()->getPrenom(),
        ];
        $intervention = new Intervention();
        $form = $this->createForm(InterventionType::class, $intervention);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $terrain = $entityManager->getRepository(Terrain::class)->find($idT);
        $intervention->setTerrain($terrain);
        $user = $entityManager->getRepository(User::class)->find($userId );
        $intervention->setUser($user);

   
        $entityManager->persist($intervention);
        $entityManager->flush();


        $this->addFlash('success', 'Intervention ajoutée avec succès.');
        return $this->redirectToRoute('intervention', ['idT' => $idT, 'userId' => $userId]);
        }
        return $this->render('terrain/intervention.html.twig', [
            'images' => $imagesData, 
            'interventions' => $interventions,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/deleteI/{id}', name: 'deleteI')]
    public function deleteI(Request $request , PersistenceManagerRegistry $doctrine,$id)
    {
        $crud = $doctrine->getRepository(Intervention::class)->find($id);
            $em =$doctrine->getManager(); 
            $em->remove($crud);  
            $em->flush();   
            $this->addFlash('notice',' successfully!!'); 
            return $this->redirectToRoute('terrain_list');
        
    }

    #[Route('/editI/{id}', name: 'editI')]
    public function updateI(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        
        $inter = $entityManager->getRepository(Intervention::class)->find($id);
   
        $form = $this->createForm(InterventionType::class, $inter);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
    
            $entityManager->flush();
            $this->addFlash('success', 'Terrain mis à jour avec succès.');
            return $this->redirectToRoute('terrain_list');
        }
        return $this->render('terrain/updateI.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
}

