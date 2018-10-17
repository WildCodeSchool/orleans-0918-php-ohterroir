<?php

namespace Controller;

use Model\ScheduleManager;

/**
 * Class contactDetailsController
 *
 */
class ScheduleController extends AbstractController
{

    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show()
    {
        $scheduleManager = new ScheduleManager($this->getPdo());
        $schedules = $scheduleManager->selectSchedule();

        return $schedules;
    }

}

