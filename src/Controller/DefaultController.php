<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    public function index()

    {
        # Transmettre à la vue
        return $this->render('default/index.html.twig');
    }

}