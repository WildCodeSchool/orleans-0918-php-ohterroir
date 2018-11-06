<?php

namespace Controller;

use Model\SpecialOfferManager;
use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Model\DishCategoryManager;
use Model\OpinionTripAdvisorManager;

class HomeController extends AbstractController
{
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contact = $contactManager->selectUniquetEntry();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $allSchedules = $scheduleManager->selectSchedule();
        $schedules = ScheduleController::optimizeDisplayTimeSlots($allSchedules);

        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActiveWithMinPrice();
          
        $specialOffersManager = new SpecialOfferManager($this->getPdo());
        $specialOffers = $specialOffersManager->getSpecialOffers();

        $opinionsTripAdvisorManager = new OpinionTripAdvisorManager($this->getPdo());
        $opinionsTripAdvisor = $opinionsTripAdvisorManager->selectAll();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contact" => $contact,
            "schedules" => $schedules,
            "dishCategories" => $dishCategories,
            "opinionsTripAdvisor" => $opinionsTripAdvisor,
            "specialoffers" => $specialOffers,
        ]);
    }
}
