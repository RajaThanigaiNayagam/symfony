<?php

// src/Controller/PostController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
    * @Route("/list", name="list")
    */
    public function list()
    {
        $posts = [
            ['title' => 'Fonctionnement des applications Symfony'],
            ['title' => 'Le système de routing'],
            ['title' => 'Les contrôleurs'],
            ['title' => 'Les templates'],
        ];
    $content = '<ul>';
    
    foreach ($posts as $post) {
        $content .= '<li>'.$post['title'].'</li>';
    }

    $content .= '</ul>';

    return new Response($content);
    }

    public function item(): Response
    {
        $post = [
            'title' => 'Fonctionnement des applications Symfony',
            'author' => 'Pierre Dupont',
        ];

        return new Response('<h1>'.$post['title'].'</h1><p>Écrit par '.$post['author'].'.</p>');
    }
}