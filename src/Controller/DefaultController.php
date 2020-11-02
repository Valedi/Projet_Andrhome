<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    /**
     *
     */
    public function index()
    {
        # Transmettre à la vue
        return $this->render('default/index.html.twig');
    }

    public function categorie_androide()
    {
        # Transmettre à la vue
        return $this->render('default/categorie_androide.html.twig');
    }

    public function categorie_accessoire()
    {
        # Transmettre à la vue
        return $this->render('default/categorie_accessoire.html.twig');
    }
    public function fiche_produit_androide()

    {
        # Transmettre à la vue
        return $this->render('default/fiche_produit_androide.html.twig');
    }
    public function fiche_produit_accessoire()

    {
        # Transmettre à la vue
        return $this->render('default/fiche_produit_accessoire.html.twig');
    }

}