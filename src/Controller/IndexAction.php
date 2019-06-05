<?php
namespace App\Controller;

use App\Entity\Apartment;
use App\Entity\House;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexAction extends AbstractController
{
    public function showIndexAction()
    {

        $userId = $this->getUser()->getId();
        $apartments = $this->getDoctrine()
                           ->getRepository(Apartment::class)
                           ->findBy(['user' => $userId]);
        $houses = $this->getDoctrine()
                           ->getRepository(House::class)
                           ->findBy(['user' => $userId]);
        return $this->render(
            'index.html.twig',
            ['apartments' => $apartments,
            'houses' => $houses,]);
    }
}

// Lien vers Annonce immbiliere
// Priorité
// Si achat suppression
//Ajout de photos pour les biens