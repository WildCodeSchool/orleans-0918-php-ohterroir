<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

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
        return $this->pdo->query('SELECT * FROM ' . $this->table . ' INNER JOIN weekdays ON weekdays.id = schedule.weekdays_id', \PDO::FETCH_CLASS, $this->className)->fetchAll();
    }

}

