<?php

namespace App\Controller;

use App\Entity\House;
use App\Form\House1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/house")
 */
class HouseController extends AbstractController
{
    /**
     * @Route("/", name="house_index", methods={"GET"})
     */
    public function index(): Response
    {
        $userId = $this->getUser()->getId();
        $houses = $this->getDoctrine()
            ->getRepository(House::class)
            ->findBy(['user' => $userId]);

        return $this->render('house/index.html.twig', [
            'houses' => $houses,
        ]);
    }

    /**
     * @Route("/new", name="house_new", methods={"GET","POST"})
     * @throws \Exception
     */
    public function new(Request $request): Response
    {
        $house = new House();
        $form = $this->createForm(House1Type::class, $house);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $house->setCreatedAt(new \DateTime('now'));
            $house->setUser($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($house);
            $entityManager->flush();

            return $this->redirectToRoute('house_index');
        }

        return $this->render('house/new.html.twig', [
            'house' => $house,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="house_show", methods={"GET"})
     */
    public function show(House $house): Response
    {
        if($this->getUser()->getId() != $house->getUser()->getId()) {
            throw new \Exception('You don\'t have access to this apartment');
        }

        return $this->render('house/show.html.twig', [
            'house' => $house,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="house_edit", methods={"GET","POST"})
     * @param Request $request
     * @param House   $house
     *
     * @return Response
     * @throws \Exception
     */
    public function edit(Request $request, House $house): Response
    {
        if($this->getUser()->getId() != $house->getUser()->getId()) {
            throw new \Exception('You don\'t have access to this apartment');
        }

        $form = $this->createForm(House1Type::class, $house);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('house_index', [
                'id' => $house->getId(),
            ]);
        }

        return $this->render('house/edit.html.twig', [
            'house' => $house,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="house_delete", methods={"DELETE"})
     * @param Request $request
     * @param House   $house
     *
     * @return Response
     * @throws \Exception
     */
    public function delete(Request $request, House $house): Response
    {
        if($this->getUser()->getId() !== $house->getUser()->getId()) {
            throw new \Exception('You don\'t have access to this apartment');
        }

        if ($this->isCsrfTokenValid('delete'.$house->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($house);
            $entityManager->flush();
        }

        return $this->redirectToRoute('house_index');
    }
}
