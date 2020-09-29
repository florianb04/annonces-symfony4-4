<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TestController extends AbstractController
{

    /**
     * @Route("/test", name="testpage")
     */
    public function index()
    {
        $tab = ['Eric'=>52,'Gerald'=>53,'Florian'=>26];

        $a = 'Wael';

        dump($tab);
        dump($a);

        return $this->render('test/test.html.twig', [
            'tableau'=>$tab,
            'prenom'=>$a,
            'age'=>13,
        ]);
    }
}



