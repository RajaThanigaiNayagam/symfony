<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{

    /**
    * @Route("/", name="index")
    */
    public function index()
    {
        return new Response('Bienvenue dans notre restaurant !');
    }

    /**
    * @Route("/carte", name="carte")
    */
    public function carte()
    {
        return new Response('Retrouvez ici notre menu !');
    }

    /**
    * @Route("/reservation", name="reservation")
    */
    public function reservation()
    {
        return new Response('Appelez-nous pour réserver !');
    }
}