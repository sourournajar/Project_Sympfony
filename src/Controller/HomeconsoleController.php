<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeconsoleController extends AbstractController
{
    #[Route('/homeconsole', name: 'app_homeconsole')]
    public function index(): Response
    {
        return $this->render('homeconsole/index.html.twig', [
            'controller_name' => 'HomeconsoleController',
        ]);
    }
}
