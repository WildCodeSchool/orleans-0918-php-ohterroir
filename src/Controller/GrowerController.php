<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 24/10/18
 * Time: 13:57
 */

namespace Controller;

class GrowerController extends AbstractController
{
    public function show()
    {
        return $this->twig->render('Grower/growerPage.html.twig',[
            "growerPage" => "active",
        ]);
    }
}
