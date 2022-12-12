<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'HomeController', 'success' => "Logged In successfully!"
        ]);
    }


    #[Route('/frontcandidate', name: 'frontcandidate')]
    public function inde(): Response
    {
        return $this->render('home/frontcandidate.html.twig', [
        ]);
    }

    #[Route('/frontentrepreneur', name: 'frontentrepreneur')]
    public function ind(): Response
    {
        return $this->render('home/frontentrepreneur.html.twig', [
        ]);
    }
}
