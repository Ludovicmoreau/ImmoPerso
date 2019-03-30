<?php
namespace App\Controller;

use App\Entity\Apartment;
use App\Form\ApartmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ApartmentAction extends AbstractController
{
    public function showApartmentFormAction(Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(ApartmentType::class, []);

        if ($form->handleRequest($request) && $form->isSubmitted() && $form->isValid()) {
            $house = new Apartment(
                $form->get('floor')->getData(),
                                $form->get('numberOfRoom')->getData(),
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
            $session = new Session();
            $session->start();
            $session->getFlashBag()->add('notice', 'Profile updated');
            return $this->redirectToRoute('index');
        }

        return $this->render('ApartmentForm.html.twig', ['form' => $form->createView()]);

    }


}