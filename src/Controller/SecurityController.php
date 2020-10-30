<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("membre/connexion", name="membre_login")
     */
    public function loginMembre()
    {
        # Transmettre à la vue
        return $this->render('security/loginmembre.html.twig');
    }

    /**
     * @Route("admin/connexion", name="admin_login")
     */
    public function loginAdmin()
    {
        # Transmettre à la vue
        return $this->render('security/loginadmin.html.twig');
    }


}