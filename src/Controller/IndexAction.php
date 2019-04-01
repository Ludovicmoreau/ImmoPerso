<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexAction extends AbstractController
{
    public function showIndexAction()
    {
        return $this->render('index.html.twig');
    }
}