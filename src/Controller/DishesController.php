<?php

namespace Controller;

class DishesController extends AbstractController
{

    public function show()
    {
        return $this->twig->render('dishes.html.twig');
    }
}
