<?php
/**
 * Created by PhpStorm.
 * User: ln
 * Date: 12/10/18
 * Time: 09:44
 */

namespace Controller;

class HomeController extends AbstractController
{

    public function show()
    {
        return $this->twig->render('Home/home.html.twig', ["home" => "active"]);
    }
}
