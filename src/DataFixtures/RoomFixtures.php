<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Room;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoomFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Salle de réunion');
        $manager->persist($category);

        for ($i = 0; $i < 25; $i++) {
            $room = new Room();
            $room->setName("Salle");
            $room->setCapacity(10);
            $room->setCategory($category);
            $manager->persist($room);
        }
        $manager->flush();
    }
}
