<?php

namespace Controller;

use Model\ContactDetailsManager;
use Model\ScheduleManager;

class DishesController extends AbstractController
{

    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $schedules = $scheduleManager->selectSchedule();
        
        return $this->twig->render('dishes.html.twig', [
            "dishPage" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
        ]);
    }
}
