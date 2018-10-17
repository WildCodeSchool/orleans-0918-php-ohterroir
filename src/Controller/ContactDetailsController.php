<?php
namespace Controller;

use Model\ContactDetailsManager;

class ContactDetailsController extends AbstractController
{
    public function edit() : string
    {
        $contactDetailsManager = new ContactDetailsManager($this->getPdo());
        $contactDetails = $contactDetailsManager->selectAll();

        return $this->twig->render('Admin/contactDetails.html.twig', [
            'contactDetails' => $contactDetails
        ]);
    }
}