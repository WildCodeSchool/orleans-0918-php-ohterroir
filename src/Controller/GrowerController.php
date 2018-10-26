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
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $schedules = $scheduleManager->selectSchedule();

        return $this->twig->render('Grower/show.html.twig',[
            "growerPage" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
        ]);
    }
}
