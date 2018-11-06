<?php

namespace Controller;

use Model\DishCategoryManager;
use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Service\ScheduleService;

class DishesController extends AbstractController
{

    public function show()
    {
        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActiveWithMinPrice();

        $contactManager = new ContactDetailsManager($this->getPdo());
        $contacts = $contactManager->selectAll();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $timeSlotsPerDayAMandPM = $scheduleManager->selectSchedule();
        $scheduleService = new ScheduleService();
        $schedules = $scheduleService->optimizeDisplayTimeSlots($timeSlotsPerDayAMandPM);
        
        return $this->twig->render('dishes.html.twig', [
            "dishPage" => "active",
            "contacts" => $contacts,
            "schedules" => $schedules,
            "dishCategories" => $dishCategories,
        ]);
    }
}
