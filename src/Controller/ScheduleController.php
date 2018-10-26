<?php
namespace Controller;

use Model\ScheduleManager;

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
        $scheduleManager = new ScheduleManager($this->pdo);
        $allSchedules = $scheduleManager->selectSchedule();
        $timeSlotsGroupByDay = $this->optimizeDisplayTimeSlots($allSchedules);

        return $this->twig->render('Admin/scheduleShow.html.twig', ['schedules' => $timeSlotsGroupByDay]);
    }
}
