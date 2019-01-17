<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('page/home.html.twig');
    }

    /**
     * @Route("/games", name="games")
     */
    public function index()
    {
        return $this->render('page/games.html.twig');
    }
}
