<?php

namespace Controller;

use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Model\DishCategoryManager;
use Model\OpinionTripAdvisorManager;

class HomeController extends AbstractController
{
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $schedules = $scheduleManager->selectSchedule();
      
        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActive();

        $opinionsTripAdvisorManager = new OpinionTripAdvisorManager($this->getPdo());
        $opinionsTripAdvisor = $opinionsTripAdvisorManager->selectAll();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
            "dishCategories" => $dishCategories,
            "opinionsTripAdvisor" => $opinionsTripAdvisor,
        ]);
    }
}
