<?php

namespace Model;

class Schedule
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $openingHour1;

    /**
     * @var \DateTime
     */
    private $openingHour2;

    /**
     * @var int
     */
    private $weekdaysId;

    /**
     * @var string
     */
    private $dayName;


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @param int $id
     * @return Schedule
     */
    public function setId(int $id) : Schedule
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getOpeningHour1() : ?\DateTime
    {
        return $this->openingHour1;
    }


    /**
     * @param \DateTime $openingHour1
     * @return Schedule
     */
    public function setOpeningHour1(\DateTime $openingHour1) : Schedule
    {
        $this->openingHour1 = $openingHour1;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getOpeningHour2() : ?\DateTime
    {
        return $this->openingHour2;
    }


    /**
     * @param \DateTime $openingHour2
     * @return Schedule
     */
    public function setOpeningHour2(\DateTime $openingHour2) : Schedule
    {
        $this->openingHour2 = $openingHour2;
        return $this;
    }


    /**
     * @return int
     */
    public function getWeekdaysId() : ?int
    {
        return $this->weekdaysId;
    }


    /**
     * @param int $weekdaysId
     * @return Schedule
     */
    public function setWeekdaysId(int $weekdaysId) : Schedule
    {
        $this->weekdaysId = $weekdaysId;
        return $this;
    }


    /**
     * @return string
     */
    public function getDayName() : string
    {
        return $this->dayName;
    }


    /**
     * @param string $dayName
     * @return Schedule
     */
    public function setDayName(string $dayName) : Schedule
    {
        $this->dayName = $dayName;
        return $this;
    }
}
