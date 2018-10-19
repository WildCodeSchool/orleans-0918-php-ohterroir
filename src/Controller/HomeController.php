<?php

namespace Controller;

use Model\ContactDetailsManager;
use Model\DishCategoryManager;

class HomeController extends AbstractController
{
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActive();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contacts" => $contacts,
            "dishCategories" => $dishCategories,
        ]);
    }
}
