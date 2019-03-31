<?php

namespace App\Controller;

use App\Entity\Apartment;
use App\Form\Apartment1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/apartment")
 */
class ApartmentController extends AbstractController
{
    /**
     * @Route("/", name="apartment_index", methods={"GET"})
     */
    public function index(): Response
    {
        $apartments = $this->getDoctrine()
            ->getRepository(Apartment::class)
            ->findAll();

        return $this->render('apartment/index.html.twig', [
            'apartments' => $apartments,
        ]);
    }

    /**
     * @Route("/new", name="apartment_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $apartment = new Apartment();
        $form = $this->createForm(Apartment1Type::class, $apartment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($apartment);
            $entityManager->flush();

            return $this->redirectToRoute('apartment_index');
        }

        return $this->render('apartment/new.html.twig', [
            'apartment' => $apartment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="apartment_show", methods={"GET"})
     */
    public function show(Apartment $apartment): Response
    {
        return $this->render('apartment/show.html.twig', [
            'apartment' => $apartment,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="apartment_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Apartment $apartment): Response
    {
        $form = $this->createForm(Apartment1Type::class, $apartment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('apartment_index', [
                'id' => $apartment->getId(),
            ]);
        }

        return $this->render('apartment/edit.html.twig', [
            'apartment' => $apartment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="apartment_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Apartment $apartment): Response
    {
        if ($this->isCsrfTokenValid('delete'.$apartment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($apartment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('apartment_index');
    }
}
