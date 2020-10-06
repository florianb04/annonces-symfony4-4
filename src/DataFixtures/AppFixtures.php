<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use Cocur\Slugify\Slugify;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {



        for ($i=0; $i < 30; $i++) { 

            // step by step slugigy use
            $slugify = new Slugify();
            $title = "Titre de l'annonce n : $i";
            $slug = $slugify->slugify($title);
            
            $ad = new Ad ();
            $ad->setTitle("Titre de l'annonce n : $i ")
            ->setSlug($slug)
            ->setPrice(mt_rand(40,200))
            ->setIntroduction("<p> introduction de l'annonce n : $i </p>")
            ->setContent("<p>  contenu de l'annonce n : $i </p>")
            ->setRooms(mt_rand(1,5)) 
            ->setCoverImage("https://via.placeholder.com/350");
        
            // keep in temp memory to don't erase for every turn "for"
            $manager->persist($ad);

            // write in the DB
            $manager->flush();


            // Concatenation of the old slug with the ID to be sure the the slug is unique
            $slug2 = $ad->getSlug().'_'.$ad->getId();
            $ad->setSlug($slug2);

            $manager->persist($ad);
            $manager->flush();


            //dump($ad->getId());

        }

        // $manager->flush();

    }

}
