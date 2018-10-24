<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 24/10/18
 * Time: 13:57
 */

namespace Controller;

class ProducerController extends AbstractController
{
    public function show()
    {
        return $this->twig->render('Producer/producerPage.html.twig',[
            "producerPage" => "active",
        ]);
    }
}
