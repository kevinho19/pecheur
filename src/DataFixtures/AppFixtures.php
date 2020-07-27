<?php

namespace App\DataFixtures;

use \DateTime;

use App\Entity\Post;

use App\Entity\Comments;

use Doctrine\Bundle\FixturesBundle\Fixture;

use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture

{

    public function load(ObjectManager $manager)
    
    {
    
        $d = new DateTime();
        
        for ($i = 0; $i < 20; $i++) {
        
            $post = new Post();
            
            $post->setPoisson('poisson n° '.$i);
            
            $post->setNomPhoto('photo '.$i);
            
            $post->setPoids('10');

            $post->setDescriptif('voici le descriptif de la photo');

            $post->setNom('nom');

            $post->setPrenom('prenom');

            $post->setCreatedAt($d);
            
            $manager->persist($post);

            $comm = new Comments();

            $comm->setPost($post);

            $comm->setNomC('nom');

            $comm->setPrenomC('prenom');

            $comm->setCommentairesC('blablabla');

            $comm->setDateC($d);

            $manager->persist($comm);
            
        }

        $manager->flush();
    }
    
}