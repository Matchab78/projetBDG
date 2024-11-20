<?php
namespace App\Controller;

use App\Repository\VoituresRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoituresController extends AbstractController
{
    #[Route('/voitures', name: 'app_voitures')]
    public function index(VoituresRepository $voituresRepository): Response
    {
        // Récupération de toutes les voitures
        $voitures = $voituresRepository->findAll();

        // Rendu du template avec les données des voitures
        return $this->render('voitures/index.html.twig', [
            'voitures' => $voitures,
        ]);
    }

    #[Route('/detailVoiture', name: 'detailVoit')]
    public function details(VoituresRepository $voituresRepository): Response
    {
        // Récupération de toutes les voitures
        $voitures = $voituresRepository->findAll();

        // Rendu du template avec les données des voitures
        return $this->render('voitures/detailVoiture.html.twig', [
            'voitures' => $voitures,
        ]);
    }
}

