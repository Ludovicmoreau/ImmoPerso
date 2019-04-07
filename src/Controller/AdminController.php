<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    /**
     * @return Response
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}