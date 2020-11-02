<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

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
}