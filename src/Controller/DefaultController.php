<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController  
{
    #public function index()
    #{
    #return new Response('Hello world!');
    #}

     /**
    * @Route("/contact", name="contact")
    */
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', [
            'title' => 'Ma page de contact',
        ]);
    }


}