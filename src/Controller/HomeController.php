<?php

namespace Controller;

class HomeController extends AbstractController
{
    public function show()
    {
        $contactDetailsController = new ContactDetailsController();
        $contacts = $contactDetailsController->show();
        $scheduleController = new ScheduleController();
        $schedules = $scheduleController->show();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
        ]);
    }
}
