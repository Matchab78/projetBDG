<?php

namespace App\Controller;

use App\Repository\MarqueRepository;
use App\Repository\VoitureRepository;
use App\Repository\VoituresRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoitureController extends AbstractController
{
    #[Route('/voitures', name: 'voitures_index')]
    public function index(VoituresRepository $voitureRepository, MarqueRepository $marqueRepository): Response
    {
        $voitures = $voitureRepository->findAll();
        $marques = $marqueRepository->findAll();

        return $this->render('voitures/index.html.twig', [
            'voitures' => $voitures,
            'marques' => $marques,
        ]);
    }
}
