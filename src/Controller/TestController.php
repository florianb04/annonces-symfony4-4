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
        // tableau
        $tab = ['Eric'=>52,'Gerald'=>53,'Florian'=>26];

        // variable simple
        $a = 'Wael';

        dump($tab);
        dump($a);

        // on associe les varible PHP en valeur avec des clefs twig
        // on pourra utiliser les varible twig 
        return $this->render('test/test.html.twig', [
            'tableau'=>$tab,
            'prenom'=>$a,
            'age'=>13,
        ]);
    }
}



