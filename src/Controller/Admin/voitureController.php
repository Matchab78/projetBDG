<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class voitureController extends AbstractController
{
    #[Route('/admin/voiture', name: 'app_admin_voiture')]
    public function index(): Response
    {
        return $this->render('admin/voiture/index.html.twig', [
            'controller_name' => 'voitureController',
        ]);
    }
}
