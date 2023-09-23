<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenemcanController extends AbstractController
{
    #[Route('/evenemcan', name: 'app_evenemcan')]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenemcan/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('ca/{id}', name: 'app_evenemcan_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenemcan/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }
}
