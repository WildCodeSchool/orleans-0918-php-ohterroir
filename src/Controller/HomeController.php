<?php

namespace Controller;

use Model\SpecialOffersManager;

class HomeController extends AbstractController
{

    public function show()
    {
        $specialOffersManager = new specialOffersManager($this->getPdo());
        $specialOffers = $specialOffersManager->show();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "specialoffers" => $specialOffers,
        ]);
    }
}
