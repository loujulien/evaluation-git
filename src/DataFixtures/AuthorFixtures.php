<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use app\Entity\Author;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0 ; $i<10 ; $i++){
            $author = new Author();
            $author->setName("nom auteur $i")
                    ->setPseudo("pseudo auteur $i")
                    ->setAge($i);

            $manager->persist($author);
        }
        
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
