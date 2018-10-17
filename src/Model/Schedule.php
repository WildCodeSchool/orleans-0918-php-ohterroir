<?php

namespace Model;

class Schedule
{
    private $id;

    private $opening_hour_1;

    private $opening_hour_2;

    private $weekdays_id;

    private $day_name;


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @param $id
     * @return Schedule
     */
    public function setId($id) : schedule
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOpeningHour1() : string
    {
        return $this->opening_hour_1;
    }


    /**
     * @param $opening_hour_1
     * @return Schedule
     */
    public function setOpeningHour1($opening_hour_1) : schedule
    {
        $this->opening_hour_1 = $opening_hour_1;
    }


    /**
     * @return string
     */
    public function getOpeningHour2() : string
    {
        return $this->opening_hour_2;
    }


    /**
     * @param $opening_hour_2
     * @return Schedule
     */
    public function setOpeningHour2($opening_hour_2) : schedule
    {
        $this->opening_hour_2 = $opening_hour_2;
    }


    /**
     * @return int
     */
    public function getWeekdaysId() : int
    {
        return $this->weekdays_id;
    }


    /**
     * @param $weekdays_id
     * @return Schedule
     */
    public function setWeekdaysId($weekdays_id) : schedule
    {
        $this->weekdays_id = $weekdays_id;
    }


    /**
     * @return string
     */
    public function getDayName() : string
    {
        return $this->day_name;
    }


    /**
     * @param $day_name
     * @return Schedule
     */
    public function setDayName($day_name) : schedule
    {
        $this->day_name = $day_name;
    }
}
