<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 10/10/18
 * Time: 13:37
 */

namespace Controller;

use Model\HomeManager;

class HomeController extends Controller
{
    public function home()
    {
        $itemActive = ["home" => "active","dish" => "","grower" => ""];
        return $this->twig->render('Home/home.html.twig', ["itemActive" => $itemActive]);
    }
}
