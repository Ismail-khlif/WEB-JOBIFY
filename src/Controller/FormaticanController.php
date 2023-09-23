<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormaticanController extends AbstractController
{
    #[Route('/formatican', name: 'app_formatican')]
    public function index(FormationRepository $formationRepository): Response
    {
        return $this->render('formatican/index.html.twig', [
            'formations' => $formationRepository->findAll(),
        ]);
    }

    #[Route('ca/{id}', name: 'app_formatican_show', methods: ['GET'])]
    public function show(Formation $formation): Response
    {
        return $this->render('formatican/show.html.twig', [
            'formation' => $formation,
        ]);
    }
}
