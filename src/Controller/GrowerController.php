<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 24/10/18
 * Time: 13:57
 */

namespace Controller;

use Model\GrowerCategoryManager;

class GrowerController extends AbstractController
{
    public function show()
    {
        $growerCategoryManager = new GrowerCategoryManager($this->getPdo());
        $growerCategories = $growerCategoryManager->selectAll();

        return $this->twig->render('Grower/show.html.twig', [
            "growerPage" => "active",
            "growerCategories" => $growerCategories,
        ]);
    }
}
