<?php

namespace App\Controller;
use App\Entity\Comment;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use SQLite3Exception;
use Symfony\Component\String\Slugger\SluggerInterface;
// #[Route('front/article')]
final class ArticleController extends AbstractController
{
    #[Route('front/article',name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, CommentRepository $commentRepository): Response
    {
        // Get all articles
        $articles = $articleRepository->findAll();
    
        // Create an associative array to store comments for each article
        $articleComments = [];
    
        // Loop through each article and fetch its associated comments
        foreach ($articles as $article) {
            $comments = $commentRepository->findBy(['id_article' => $article->getId()]);
            $articleComments[$article->getId()] = $comments;
        }
    
        // Create a new comment object for the comment form
        $newComment = new Comment();
        $commentForm = $this->createForm(CommentType::class, $newComment);
    
        // Render the Twig template with articles, comments, and the comment form
        return $this->render('front/article/index.html.twig', [
            'articles' => $articles,
            'articleComments' => $articleComments,
            'commentForm' => $commentForm->createView(),
        ]);
    }

    #[Route('front/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/front',
                        $newFilename
                    );
                } catch (SQLite3Exception  ) {
                    printf("error");
                }

                $article->setImage($newFilename);
            }

            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    // #[Route('front/{id}', name: 'app_article_show', methods: ['GET'])]
    // public function show(Article $article): Response
    // {
    //     return $this->render('front/article/show.html.twig', [
    //         'article' => $article,
    //     ]);
    // }

    #[Route('/front/article/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/front',
                        $newFilename
                    );
                } catch (SQLite3Exception ) {
                    // Handle file upload error
                }

                $article->setImage($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    #[Route('front/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('back/article', name: 'app_articleback_index', methods: ['GET'])]
public function indexback(ArticleRepository $articleRepository, CommentRepository $commentRepository): Response
{
    // Get all articles
    $articles = $articleRepository->findAll();

    // Create an associative array to store comments for each article
    $articleComments = [];

    // Loop through each article and fetch its associated comments
    foreach ($articles as $article) {
        $comments = $commentRepository->findBy(['id_article' => $article->getId()]);
        $articleComments[$article->getId()] = $comments;
    }

    // Create a new comment object for the comment form
    $newComment = new Comment();
    $commentForm = $this->createForm(CommentType::class, $newComment);

    // Render the Twig template with articles, comments, and the comment form
    return $this->render('back/article/index.html.twig', [
        'articles' => $articles,
        'articleComments' => $articleComments,
        'commentForm' => $commentForm->createView(),
    ]);
}
#[Route('back/article/new', name: 'app_articleback_new', methods: ['GET', 'POST'])]
public function newback(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $article = new Article();
    $form = $this->createForm(ArticleType::class, $article);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('kernel.project_dir') . '/public/images/front',
                    $newFilename
                );
            } catch (SQLite3Exception  ) {
                printf("error");
            }

            $article->setImage($newFilename);
        }

        $entityManager->persist($article);
        $entityManager->flush();

        return $this->redirectToRoute('app_articleback_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('back/article/new.html.twig', [
        'article' => $article,
        'form' => $form,
    ]);
}

#[Route('back/article/{id}/edit', name: 'app_articleback_edit', methods: ['GET', 'POST'])]
public function editback(Request $request, Article $article, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $form = $this->createForm(ArticleType::class, $article);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('kernel.project_dir') . '/public/images/front',
                    $newFilename
                );
            } catch (SQLite3Exception ) {
                // Handle file upload error
            }

            $article->setImage($newFilename);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_articleback_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('back/article/edit.html.twig', [
        'article' => $article,
        'form' => $form,
    ]);
}
#[Route('back/article/{id}', name: 'app_articleback_delete', methods: ['POST'])]
public function deleteback(Request $request, Article $article, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
        $entityManager->remove($article);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_articleback_index', [], Response::HTTP_SEE_OTHER);
}
}
