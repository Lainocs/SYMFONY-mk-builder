<?php

namespace App\Controller;

use App\Entity\Build;
use App\Form\BuildType;
use App\Repository\BuildRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profile')]
class BuildController extends AbstractController
{
    #[Route('/', name: 'profile', methods: ['GET'])]
    public function index(BuildRepository $buildRepository): Response
    {
        // find all builds where user is the current user
        $builds = $buildRepository->findBy(['user' => $this->getUser()], ['id' => 'DESC']);

        return $this->render('build/index.html.twig', [
            'builds' => $builds,
        ]);
    }

    #[Route('/new', name: 'build_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $build = new Build();
        // set user id to build
        $build->setUser($this->getUser());
        $form = $this->createForm(BuildType::class, $build);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($build);
            $entityManager->flush();

            return $this->redirectToRoute('profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('build/new.html.twig', [
            'build' => $build,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'build_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Build $build, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BuildType::class, $build);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('build/edit.html.twig', [
            'build' => $build,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'build_delete', methods: ['POST'])]
    public function delete(Request $request, Build $build, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$build->getId(), $request->request->get('_token'))) {
            $entityManager->remove($build);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profile', [], Response::HTTP_SEE_OTHER);
    }
}
