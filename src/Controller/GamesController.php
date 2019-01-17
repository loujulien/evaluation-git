<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GamesController extends AbstractController
{
    /**
     * @Route("/games", name="games")
     */
    public function index()
    {
        return $this->render('pages/games.html.twig', [
            'controller_name' => 'GamesController',
        ]);
    }
}
