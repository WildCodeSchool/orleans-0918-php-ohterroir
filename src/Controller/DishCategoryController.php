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
            foreach ($_POST as $key => $value) {
                $cleanPost[$key] = trim($value);
            }
            $errors = [];
            if (empty($cleanPost['namePageHome'])) {
                $errors[] = "La catégorie du plat est obligatoire, merci de la renseigner";
            }
            if (empty($cleanPost['namePageDish'])) {
                $errors[] = "Le nom du plat est obligatoire, merci de le renseigner";
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['namePageHome'])) {
                $errors[] = "les caractères spéciaux ne sont pas autorisés";
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['namePageDish'])) {
                $errors[] = "les caractères spéciaux ne sont pas autorisés";
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['description'])) {
                $errors[] = "les caractères spéciaux ne sont pas autorisés";
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['complementaryInformation'])) {
                $errors[] = "les caractères spéciaux ne sont pas autorisés";
            }

            if (empty($errors)) {
                $dishCategoryManager = new DishCategoryManager($this->getPdo());
                $dishCategory = new DishCategory();
                $dishCategory->setNamePageHome($cleanPost['namePageHome']);
                $dishCategory->setNamePageDish($cleanPost['namePageDish']);
                $dishCategory->setDescription($cleanPost['description']);
                $dishCategory->setComplementaryInformation($cleanPost['complementaryInformation']);
                $dishCategory->setIsActive($_POST['isActive']);
                $id = $dishCategoryManager->insert($dishCategory);

                header('Location:/admin/categorie-plats/ajouter');
                exit();
            }
        }
        return $this->twig->render('Admin/addDishCategory.html.twig');
    }
}