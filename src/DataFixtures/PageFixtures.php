<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use app\Entity\Page;

class PageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i < 5 ;$i++){
            $page = new Page;
            $page->setTitle("titre de ma page $i")
                ->setFisrtContent ("<p> contenue 1 de l'article $i</p>")
                ->setSecondContent("<p> contenue 2 de l'article $i</p>")
                ->setImage("http.placehold.it/350x150")
                ->setPublishDate(new \datetime());

            $manager->persist($page);

        }
        // $product = new Product();
        // $manager->persist($product);
        $manager->flush();
    }
}
