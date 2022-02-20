<?php

namespace App\Controller;

use App\Repository\BuildRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(BuildRepository $buildRepository): Response
    {
        // find all builds and order by desc
        $builds = $buildRepository->findBy([], ['id' => 'DESC']);

        return $this->render('home/index.html.twig', [
            'builds' => $builds,
        ]);
    }
}
