<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 15:38
 * PHP version 7
 */

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;

use App\Connection;

/**
 *
 */
abstract class AbstractController
{
    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @var \PDO
     */
    protected $pdo;

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(APP_VIEW_PATH);
        $this->twig = new Twig_Environment(
            $loader,
            [
                'cache' => !APP_DEV,
                'debug' => APP_DEV,
            ]
        );
        $this->twig->addExtension(new \Twig_Extension_Debug());

        $connection = new Connection();
        $this->pdo = $connection->getPdoConnection();
    }

    /**
     * @return \PDO
     */
    public function getPdo(): \PDO
    {
        return $this->pdo;
    }

    /**
     * Regroupe les plages horaires identiques pour l'affichage
     * Mis dans le abstract car appel dans différents controllers
     */
    public function optimizeDisplayTimeSlots(array $allSchedules) : array
    {
        $timeSlotsPerDayAMandPM = [];

        foreach ($allSchedules as $schedule) {
            $timeSlot = $schedule->getOpeningHour1()->format('H:i') . ' - '
                        . $schedule->getOpeningHour2()->format('H:i');
            $day = $schedule->getDayName();
            $timeSlotsPerDayAMandPM[] = ['day' => $day, 'timeSlot' => $timeSlot];
        }

        $timeSlotsPerDay = [];
        for ($i = 0; $i < count($timeSlotsPerDayAMandPM); $i++) {
            if (isset($timeSlotsPerDayAMandPM[$i+1]['day'])
                && $timeSlotsPerDayAMandPM[$i]['day'] == $timeSlotsPerDayAMandPM[$i+1]['day']) {
                    $timeSlotsPerDay[] = [
                        'day' => $timeSlotsPerDayAMandPM[$i]['day'],
                        'timeSlot1' => $timeSlotsPerDayAMandPM[$i]['timeSlot'],
                        'timeSlot2' => $timeSlotsPerDayAMandPM[$i+1]['timeSlot']
                    ];
            } elseif ($timeSlotsPerDayAMandPM[$i]['day'] != $timeSlotsPerDayAMandPM[$i-1]['day']) {
                $timeSlotsPerDay[] = [
                    'day' => $timeSlotsPerDayAMandPM[$i]['day'],
                    'timeSlot1' => $timeSlotsPerDayAMandPM[$i]['timeSlot'],
                    'timeSlot2' => ''
                ];
            }
        }

        $timeSlotsGroupByDay = [];
        foreach ($timeSlotsPerDay as $timeSlot) {
            $searchTimeSlot = false;
            for ($i = 0; $i < count($timeSlotsGroupByDay); $i++) {
                if ($timeSlotsGroupByDay[$i]['timeSlot1'] == $timeSlot['timeSlot1'] &&
                    $timeSlotsGroupByDay[$i]['timeSlot2'] == $timeSlot['timeSlot2']) {
                        $timeSlotsGroupByDay[$i]['day'] .= ' / ' .$timeSlot['day'];
                        $searchTimeSlot = true;
                        break;
                }
            }

            if ($searchTimeSlot === false) {
                $timeSlotsGroupByDay[] = [
                    'day' => $timeSlot['day'],
                    'timeSlot1' => $timeSlot['timeSlot1'],
                    'timeSlot2' => $timeSlot['timeSlot2']
                ];
            }
        }

        return $timeSlotsGroupByDay;
    }
}
