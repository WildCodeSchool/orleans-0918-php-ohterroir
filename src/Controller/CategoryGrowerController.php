<?php
/**
 * Created by PhpStorm.
 * User: amadrocky
 * Date: 05/11/18
 * Time: 10:58
 */

namespace Controller;

use Model\CategoryGrower;
use Model\CategoryGrowerManager;

class CategoryGrowerController extends AbstractController
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
            if (empty($cleanPost['categoryGrowerName'])) {
                $errors[] = "Le nom de catégorie est obligatoire, merci de la renseigner";
            }

            if (empty($errors)) {
                $categoryGrowerManager = new CategoryGrowerManager($this->getPdo());
                $categoryGrower = new CategoryGrower();
                $categoryGrower->setCategoryGrowerName($cleanPost['categoryGrowerName']);
                $id = $categoryGrowerManager->insert($categoryGrower);

                header('Location:/admin/categorie-producteurs/ajouter');
                exit();
            }
        }
        return $this->twig->render('Admin/addCategoryGrower.html.twig');
    }
}
