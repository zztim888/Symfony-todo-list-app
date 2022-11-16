<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodolistController extends AbstractController
{
    #[Route('/todolist', name: 'app_todolist')]
    public function index(): Response
    {
        return $this->render('todolist/index.php', [
            'controller_name' => 'TodolistController',
        ]);
    }
}
