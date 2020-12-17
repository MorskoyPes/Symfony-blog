<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	for ($i = 1; $i < 20; $i++) {
	        $post = new Post();
	        $post->setTitle('product'.$i);
	        $post->setSlug($i);
	        $post->setBody(mt_rand(10, 100));
	        $post->setCreatedAt(new \DateTime());

	        $manager->persist($post);
        }
        $manager->flush();
    }
}
