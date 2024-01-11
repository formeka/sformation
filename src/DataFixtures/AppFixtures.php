<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $formation = new Formation();

        $formation->setTitre('Un formation truc muche');
        $formation->setDescription('Une description de la formation truc muche');
        $formation->setDuree(3);
        $formation->setNiveau('Expert');
        $formation->setLieu('presentiel');
        $manager->persist($formation);

        $manager->flush();
    }
}
