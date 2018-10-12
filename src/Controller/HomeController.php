<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: varloteaux
 * Date: 10/10/18
 * Time: 13:37
=======
 * User: ln
 * Date: 12/10/18
 * Time: 09:44
>>>>>>> SPRINT01_US02_DIAPORAMA section carousel et phrase d'accroche
 */

namespace Controller;

class HomeController extends AbstractController
{

    public function show()
    {
        return $this->twig->render('Home/home.html.twig', ["home" => "active"]);
    }
}
