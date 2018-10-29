<?php

namespace Controller;

use Model\DishCategoryManager;

class DishesController extends AbstractController
{

    public function show()
    {
        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActive();

        return $this->twig->render('dishes.html.twig', [
            "dishCategories" => $dishCategories,
        ]);
    }
}
