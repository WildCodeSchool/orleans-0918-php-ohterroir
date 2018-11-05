<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 24/10/18
 * Time: 13:57
 */

namespace Controller;

use Model\GrowerCategoryManager;
use Model\GrowerManager;
use Model\ContactDetailsManager;
use Model\ScheduleManager;

class GrowerController extends AbstractController
{
    public function show()
    {
        $growerCategoryManager = new GrowerCategoryManager($this->getPdo());
        $growerCategories = $growerCategoryManager->selectAll();

        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $schedules = $scheduleManager->selectSchedule();

        $growerManager = new GrowerManager($this->getPdo());
        $growers = $growerManager->selectAll();

        return $this->twig->render('Grower/show.html.twig', [
            "growerPage" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
            "growerCategories" => $growerCategories,
            "growers" => $growers,
        ]);
    }
}
