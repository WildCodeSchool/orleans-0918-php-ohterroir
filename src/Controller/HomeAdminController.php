<?php

namespace Controller;

class HomeAdminController extends AbstractController
{
    public function show()
    {
        return $this->twig->render('Admin/home.html.twig');
    }
}
