<?php

namespace Model;

class Schedule
{
    private $id;

    private $openingHour1;

    private $openingHour2;

    private $weekdaysId;

    private $dayName;


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
        return $this->openingHour1;
    }


    /**
     * @param $openingHour1
     * @return Schedule
     */
    public function setOpeningHour1($openingHour1) : schedule
    {
        $this->openingHour1 = $openingHour1;
    }


    /**
     * @return string
     */
    public function getOpeningHour2() : string
    {
        return $this->openingHour2;
    }


    /**
     * @param $openingHour2
     * @return Schedule
     */
    public function setOpeningHour2($openingHour2) : schedule
    {
        $this->openingHour2 = $openingHour2;
    }


    /**
     * @return int
     */
    public function getWeekdaysId() : int
    {
        return $this->weekdaysId;
    }


    /**
     * @param $weekdaysId
     * @return Schedule
     */
    public function setWeekdaysId($weekdaysId) : schedule
    {
        $this->weekdaysId = $weekdaysId;
    }


    /**
     * @return string
     */
    public function getDayName() : string
    {
        return $this->dayName;
    }


    /**
     * @param $dayName
     * @return Schedule
     */
    public function setDayName($dayName) : schedule
    {
        $this->dayName = $dayName;
    }
}
