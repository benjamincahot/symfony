<?php

namespace Actu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ActuArticle/Default/index.html.twig');
    }

    // Creation d'un article
    public function addAction()
    {
        return $this->render('@ActuArticle/Default/create.html.twig');
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
