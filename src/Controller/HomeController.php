<?php

namespace Controller;

use Model\ContactDetailsManager;
use Model\DishCategoriesManager;

class HomeController extends AbstractController
{
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $dishCategoriesManager = new DishCategoriesManager($this->getPdo());
        $dishCategories = $dishCategoriesManager->selectAllDishCategoriesIsActive();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contacts" => $contacts,
            "dishCategories" => $dishCategories,
        ]);
    }
}
