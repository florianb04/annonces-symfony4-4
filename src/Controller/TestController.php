<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $tab = ['Eric'=>52,'Gerald'=>53,'Florian'=>26];

        $a = 'Wael';

        dump($tab);
        dump($a);

        return $this->render('home/index.html.twig', [
            'tableau'=>$tab,
            'prenom'=>$a,
            'age'=>13,
        ]);
    }
}



