<?php

namespace Controller;

use Model\SpecialOfferManager;

class HomeController extends AbstractController
{

    public function show()
    {
        $specialOffersManager = new SpecialOfferManager($this->getPdo());
        $specialOffers = $specialOffersManager->getSpecialOffers();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "specialoffers" => $specialOffers,
        ]);
    }
}
