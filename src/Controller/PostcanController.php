<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostcanController extends AbstractController
{
    #[Route('/postcan', name: 'app_postcan')]
    public function indexC(PostRepository $postRepository): Response
    {
        return $this->render('postcan/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }
    #[Route('Ca/{id}', name: 'app_postcan_show', methods: ['GET'])]
    public function showC(Post $post): Response
    {
        return $this->render('postcan/show.html.twig', [
            'post' => $post,
        ]);
    }
}
