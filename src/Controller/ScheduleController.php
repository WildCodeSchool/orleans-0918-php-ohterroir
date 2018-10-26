<?php
namespace Controller;

use Model\ScheduleManager;

class ScheduleController extends AbstractController
{
    public function show() {

        $scheduleManager = new ScheduleManager($this->pdo);
        $allSchedules = $scheduleManager->selectSchedule();
        echo '<div style="background-color:#FFF">';


        $timeSlotsPerDayAMandPM = [];

        foreach ($allSchedules as $schedule) {
            $timeSlot = $schedule->getOpeningHour1()->format('H:i') . ' - ' . $schedule->getOpeningHour2()->format('H:i');
            $day = $schedule->getDayName();
            $timeSlotsPerDayAMandPM[] = ['day' => $day, 'timeSlot' => $timeSlot];
        }

        $timeSlotsPerDay = [];
        for ($i = 0; $i < count($timeSlotsPerDayAMandPM); $i++) {
            if (isset($timeSlotsPerDayAMandPM[$i+1]['day']) && $timeSlotsPerDayAMandPM[$i]['day'] == $timeSlotsPerDayAMandPM[$i+1]['day']) {
                $timeSlotsPerDay[] = ['day' => $timeSlotsPerDayAMandPM[$i]['day'], 'timeSlot1' => $timeSlotsPerDayAMandPM[$i]['timeSlot'], 'timeSlot2' => $timeSlotsPerDayAMandPM[$i+1]['timeSlot']];
            } elseif ($timeSlotsPerDayAMandPM[$i]['day'] != $timeSlotsPerDayAMandPM[$i-1]['day']) {
                $timeSlotsPerDay[] = ['day' => $timeSlotsPerDayAMandPM[$i]['day'], 'timeSlot1' => $timeSlotsPerDayAMandPM[$i]['timeSlot'], 'timeSlot2' => ''];
            }
        }
        //var_dump($timeSlotsPerDay);

        $timeSlotsGroupByDay = [];
        foreach ($timeSlotsPerDay as $timeSlot) {
            $searchTimeSlot = false;
            for ($i = 0; $i < count($timeSlotsGroupByDay); $i++) {
                if ($timeSlotsGroupByDay[$i]['timeSlot1'] == $timeSlot['timeSlot1'] &&$timeSlotsGroupByDay[$i]['timeSlot2'] == $timeSlot['timeSlot2']) {
                    $timeSlotsGroupByDay[$i]['day'] .= ' / ' .$timeSlot['day'];
                    $searchTimeSlot = true;
                    break;
                }
            }

            if ($searchTimeSlot === false) {
                $timeSlotsGroupByDay[] = ['day' => $timeSlot['day'], 'timeSlot1' => $timeSlot['timeSlot1'], 'timeSlot2' => $timeSlot['timeSlot2']];
            }
        }
        echo '</div>';

        return $this->twig->render('Admin/scheduleShow.html.twig', ['schedules' => $timeSlotsGroupByDay]);
    }
}