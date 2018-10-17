<?php
namespace Controller;

use Model\ContactDetailsManager;

class ContactDetailsController extends AbstractController
{
    public function edit() : string
    {
        $resultCheckForm = ['cleanPost' => '', 'errors' => ''];
        $contactDetailsManager = new ContactDetailsManager($this->getPdo());
        $contactDetails = $contactDetailsManager->selectAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $resultCheckForm = $this->checkForm($_POST);

        }

        return $this->twig->render('Admin/contactDetails.html.twig', [
            'contactDetails' => $contactDetails,
            'cleanPost' => $resultCheckForm['cleanPost'],
            'errors' => $resultCheckForm['errors'],
        ]);
    }

    /**
     * Vérification des champs du formulaire
     * Retourne un tableau contenant les valeurs nettoyées et les erreurs
     * @param array $formValues
     * @return array
     */
    private function checkForm(array $formValues) : array {
        $errors = [];
        $cleanPost = [];

        foreach ($formValues as $key => $value) {
            $cleanPost[$key] = trim($value);
        }

        if (!empty($cleanPost['address']) && !empty($cleanPost['zipcode']) && !empty($cleanPost['city'])
            && !empty($cleanPost['phonenumber']) && !empty($cleanPost['email'])) {
            if (!preg_match("/\b[0-9]{5}\b/", $cleanPost['zipcode'])) {
                $errors["zipcode"] = 'Le code postal doit contenir 5 chiffres.';
            }

            if (!preg_match_all("/\b[a-zA-Z àáâãäåçèéêëìíîïðòóôõöùúûüýÿ'-]+\b/iu", $cleanPost['city'])) {
                $errors["city"] = 'La ville ne doit pas contenir de chiffres.';
            }

            if (!preg_match("/\b[0-9]{10}\b/", $cleanPost['phonenumber'])) {
                $errors["phonenumber"] = 'Le numéro de téléphone doit contenir 10 chiffres.';
            }

            if (!preg_match("/\b[\w.-]+@[\w.-]{2,}\.[a-z]{2,5}\b/", $cleanPost['email'])) {
                $errors["email"] = 'Le format de votre email est invalide.';
            }
        } else {
            $errors["global"] = 'Tous les champs sont obligatoires.';
        }

        return ['cleanPost' => $cleanPost, 'errors' => $errors];
    }
}
