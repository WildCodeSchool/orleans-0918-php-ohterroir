<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 24/10/18
 * Time: 13:57
 */

namespace Controller;

use Model\ContactDetailsManager;
use Model\ScheduleManager;

class GrowerController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show()
    {
        $resultCheckForm = ['cleanPost' => '', 'errors' => ''];
        $validateForm = '';

        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $schedules = $scheduleManager->selectSchedule();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $resultCheckForm = $this->checkForm($_POST);
            // envoi mail
            echo "Envoi email";
        }

        return $this->twig->render('Grower/show.html.twig',[
            "growerPage" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
            'cleanPost' => $resultCheckForm['cleanPost'],
            'errors' => $resultCheckForm['errors'],
        ]);
    }

    /**
     * Vérification des champs du formulaire
     * @param array $formValues
     * @return array
     */
    public function checkForm(array $formValues) : array
    {
        $errors = [];
        $cleanPost = [];
        $emptyFieldForm = false;

        foreach ($formValues as $key => $value) {
            $cleanPost[$key] = trim($value);
            if (empty(trim($value))) {
                $emptyFieldForm = true;
            }
        }

        if ($emptyFieldForm === false) {
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]]+/iu", $cleanPost['company'])) {
                $errors["company"] = 'Les caractères spéciaux ne sont pas autorisées.';
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['name'])) {
                $errors["name"] = 'Les caractères spéciaux et les chiffres ne sont pas autorisées.';
            }
            if (!preg_match("/\b[0-9]{10}\b/", $cleanPost['phonenumber'])) {
                $errors["phonenumber"] = 'Le numéro de téléphone doit contenir 10 chiffres.';
            }
            if (!preg_match("/\b[\w.-]+@[\w.-]{2,}\.[a-z]{2,5}\b/", $cleanPost['email'])) {
                $errors["email"] = 'Le format de votre email est invalide.';
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]]+/iu", $cleanPost['products'])) {
                $errors["products"] = 'Les caractères spéciaux ne sont pas autorisées.';
            }
        } else {
            $errors["global"] = 'Tous les champs sont obligatoires.';
        }

        return ['cleanPost' => $cleanPost, 'errors' => $errors];
    }
}
