<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Carte;

class CarteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        for($i=1;$i<=22;$i++){
            $carte = new Carte();
            $carte->setImage("$i.jpg")
                ->setPoids(rand(1,3))
                ->setCouleur('red')
                ->setCamp(("j1"));

            $manager->persist($carte);

        }

        $manager->flush();
    }
}
