<?php
namespace App\Controller;

use App\Entity\House;
use App\Form\HouseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class HouseAction extends AbstractController
{
    public function showHouseFormAction(Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(HouseType::class, []);

        if ($form->handleRequest($request) && $form->isSubmitted() && $form->isValid()) {
           $house = new House($form->get('numberOfRoom')->getData(),
                              $form->get('superficy')->getData(),
                              $form->get('haveWorksToDoInside')->getData(),
                              $form->get('openKitchen')->getData(),
                              $form->get('nearRER')->getData(),
                              $form->get('travelTimeToJob')->getData(),
                              $form->get('adress')->getData(),
                              $form->get('city')->getData()
               );
           $entityManager->persist($house);
           $entityManager->flush();
           $this->addFlash('notice', 'Profile updated');
           return $this->redirectToRoute('houseForm');
        }

        $allHouses = $this->getDoctrine()->getRepository(House::class)->findAll();

        return $this->render('houseForm.html.twig',
            [
                'form' => $form->createView(),
                'houses' => $allHouses
            ]
            );

    }


}