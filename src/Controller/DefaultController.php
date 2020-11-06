<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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

    /**
     * @Route("moncompte", name="default_monCompte", methods={"GET"})
     */
    public function monCompte()
    {
        # Transmettre à la vue
        return $this->render('default/mon_compte.html.twig');
    }

    /**
     * @Route("gestion_admin", name="default_gestionAdmin", methods={"GET"})
     */
    public function gestionAdmin()
    {
        # Transmettre à la vue
        return $this->render('default/gestion_admin.html.twig');
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
