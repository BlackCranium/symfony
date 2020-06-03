<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{U}", name="hello")
     */
    public function index($U)
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
            'user_login'=>$U
        ]);
    }
}
