<?php

namespace App\Controller;

use App\Services\TestService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(TestService $service)
    {
        $tmp = [
            $service->convert(1000), $service->convert(2000), $service->convert(3000)
        ];

//        dd($tmp);

        return $this->render('main/index.html.twig', [
            "tmp"=>$tmp
        ]);
    }
}
