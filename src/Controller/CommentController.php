<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// #[Route('/comment')]
final class CommentController extends AbstractController
{
    #[Route(name: 'app_comment_index', methods: ['GET'])]
    public function index(CommentRepository $commentRepository): Response
    {
        return $this->render('comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }

    #[Route('/front/comment/new', name: 'app_comment_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentText = $request->request->get('comment');
        $articleId = $request->request->get('id_article');
    
        // Fetch the Article entity based on the ID using the EntityManager
        $article = $entityManager->getRepository(Article::class)->find($articleId);
    
        if (!$article) {
            throw $this->createNotFoundException('Article not found');
        }
    
        // Create a new Comment object
        $comment = new Comment();
        $comment->setComment($commentText);
        $comment->setIdArticle($article);
    
        // Persist and flush the new comment
        $entityManager->persist($comment);
        $entityManager->flush();
    
        // Redirect back to the index page after adding the comment
        return $this->redirectToRoute('app_article_index');
    }

  
    #[Route('/front/comment/{commentid}/edit', name: 'app_comment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $commentid, EntityManagerInterface $entityManager): Response
    {
        // Get the comment entity from the database
        $comment = $entityManager->getRepository(Comment::class)->find($commentid);

        // Check if the comment exists
        if (!$comment) {
            throw $this->createNotFoundException('Comment not found');
        }

        // Create the comment edit form
        $form = $this->createForm(CommentType::class, $comment, [
            'action' => $this->generateUrl('app_comment_edit', ['commentid' => $commentid]),
            'method' => 'POST',
        ]);

        // Handle form submission
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Save the edited comment
            $entityManager->persist($comment);
            $entityManager->flush();

            // Redirect or return a response as needed
            return $this->redirectToRoute('app_article_index'); // Example redirect
        }

        // Render the edit comment form
        return $this->render('front/comment/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{commentid}', name: 'app_comment_delete', methods: ['POST'])]
public function delete(Request $request, int $commentid, EntityManagerInterface $entityManager): Response
{
    // Get the comment entity from the database
    $comment = $entityManager->getRepository(Comment::class)->find($commentid);

    // Check if the comment exists
    if (!$comment) {
        throw $this->createNotFoundException('Comment not found');
    }

    // Handle comment deletion logic
    $entityManager->remove($comment);
    $entityManager->flush();

    // Redirect or return a response as needed
    return $this->redirectToRoute('app_article_index'); // Example redirect
}
#[Route('back/comment/{commentid}', name: 'app_commentback_delete', methods: ['POST'])] 
public function deleteback(Request $request, int $commentid, EntityManagerInterface $entityManager): Response
{
// Get the comment entity from the database

$comment = $entityManager->getRepository(Comment::class)->find($commentid);

// Check if the comment exists
if (!$comment) {
    throw $this->createNotFoundException('Comment not found');
}

// Handle comment deletion logic
$entityManager->remove($comment);
$entityManager->flush();

// Redirect or return a response as needed
return $this->redirectToRoute('app_articleback_index'); // Example redirect
}
}
