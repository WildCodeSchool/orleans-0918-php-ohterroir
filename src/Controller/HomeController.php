<?php

namespace Controller;

use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Model\DishCategoryManager;

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

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
            "dishCategories" => $dishCategories,
        ]);
    }
}
