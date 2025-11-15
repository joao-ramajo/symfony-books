<?php

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/home', name: 'home', methods: ['GET', 'HEAD'])]
    public function home(): Response
    {
        return $this->render('web/home.html.twig', [
            'page_title' => 'Home Page'
        ]);
    }
}