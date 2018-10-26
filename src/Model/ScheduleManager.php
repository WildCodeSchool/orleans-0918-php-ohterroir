<?php

namespace Model;

/**
 *
 */
class ScheduleManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'schedule';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }


    /**
     * @return array
     */
    public function selectSchedule() : array
    {
        $schedules = [];
        $results = $this->pdo->query(
            'SELECT * FROM ' . $this->table . ' RIGHT JOIN weekdays ON weekdays.id = schedule.weekdaysid',
            \PDO::FETCH_ASSOC
        )->fetchAll();

        foreach ($results as $key => $result) {
            $schedule = new Schedule();

            $schedule->setId($result['id']);
            $schedule->setOpeningHour1(
                \DateTime::createFromFormat('Y-m-d H:i:s', '1970-01-01 ' . $result['openingHour1'])
            );
            $schedule->setOpeningHour2(
                \DateTime::createFromFormat('Y-m-d H:i:s', '1970-01-01 ' . $result['openingHour2'])
            );
            $schedule->setWeekdaysId($result['weekdaysId']);
            $schedule->setDayName($result['dayName']);

            $schedules[] = $schedule;
        }

        return $schedules;
    }
}
