<?php

namespace App\ArticleBundle\Data\Fixtures;

// Gestionnaire des fixtures de Doctrine
use Doctrine\Bundle\FixturesBundle\Fixture;

// Gestionnaire du Domain Object de Doctrine
use Doctrine\Common\Persistence\ObjectManager;

// L'entité Articles
use Actu\ArticleBundle\Entity\Articles;

class ArticlesFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $articles = new Articles();

    // $title
    $articles->setTitle("Le title de mon article");

    // content
    $article->setContent("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")

    $manager->persist($articles);

    $manager->flush();
  }
}
