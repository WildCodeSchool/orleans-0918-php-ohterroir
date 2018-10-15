<?php

namespace Controller;

class HomeController extends AbstractController
{

    public function show()
    {
        return $this->twig->render('Home/home.html.twig', ["home" => "active"]);
    }
}
