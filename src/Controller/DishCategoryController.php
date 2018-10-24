<?php

namespace Controller;

use Model\DishCategory;
use Model\DishCategoryManager;

class DishCategoryController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function add() : string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dishCategoryManager = new DishCategoryManager($this->getPdo());
            $dishCategory = new DishCategory();
            $dishCategory->setNamePageHome($_POST['namePageHome']);
            $dishCategory->setNamePageDish($_POST['namePageDish']);
            $dishCategory->setDescription($_POST['description']);
            $dishCategory->setComplementaryInformation($_POST['complementaryInformation']);
            //$dishCategory->setUrlPictureForHomePage($_POST['urlPictureForPageHome']);
            //$dishCategory->setUrlPictureForPageDish($_POST['urlPictureForPageDish']);
            $dishCategory->setIsActive($_POST['isActive']);
            $id = $dishCategoryManager->insert($dishCategory);

            header('Location:/admin/dishCategory/add');
            exit();
        }
        return $this->twig->render('Admin/addDishCategory.html.twig');
    }
}