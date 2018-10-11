<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 10/10/18
 * Time: 13:37
 */

namespace Controller;

class HomeController extends AbstractController
{
    public function show()
    {
        return $this->twig->render('Home/home.html.twig', ["home" => "active"]);
    }
}
