<?php

namespace Actu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Actu\ArticleBundle\Entity\Articles;
use Actu\ArticleBundle\Form\Type\ArticlesType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ActuArticle/Default/index.html.twig');
    }

    // Creation d'un article
    public function addAction()
    {
        // Instance de l'entité
        $articles = new Articles;
        // Creation du formulaire à partir du FormType est basé sur l'entité
        $form = $this->createForm(ArticlesType::class, $articles);

        // Génération de la vue du formulaire
        $form = $form->createView();
        return $this->render('@ActuArticle/Default/create.html.twig', [
          "form" => $form
        ]);
    }

    // Lecture d'un article
    public function retrieveAction()
    {
        return $this->render('@ActuArticle/Default/retrieve.html.twig');
    }

    // Mise a jour d'un article
    public function updateAction()
    {
        return $this->render('@ActuArticle/Default/update.html.twig');
    }

    // Suppression d'un article
    public function deleteAction()
    {
        return $this->render('@ActuArticle/Default/delete.html.twig');
    }
}
