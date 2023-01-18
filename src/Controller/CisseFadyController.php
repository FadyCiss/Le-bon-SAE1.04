<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CisseFadyController extends AbstractController
{
    #[Route('/', name: 'app_cisse')]
    public function Theme(): Response
    {
        return $this->render('cisse_fady/index.html.twig', [
            'controller_name' => 'CisseFadyController',
        ]);
    }
    #[Route('/moncv', name: 'cv')]
    public function moncv(): Response
    {
        return $this->render('cisse_fady/moncv.html.twig', [
            'controller_name' => 'CisseFadyController',
        ]);
    }
    #[Route('/Formulaire', name: 'Formulaire')]
    public function Formulaire(): Response
    {
        return $this->render('cisse_fady/Formulaire.html.twig', [
            'controller_name' => 'CisseFadyController',
        ]);
    }
    #[Route('/Loisirs', name: 'Loisirs')]
    public function Loisirs(): Response
    {
        return $this->render('cisse_fady/Loisirs.html.twig', [
            'controller_name' => 'CisseFadyController',
        ]);
    }
    #[Route('/Portfolio', name: 'Portfolio')]
    public function Portfolio (): Response
    {
        return $this->render('cisse_fady/Portfolio.html.twig', [
            'controller_name' => 'CisseFadyController',
        ]);
    }
}
