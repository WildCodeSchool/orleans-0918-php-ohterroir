<?php

namespace Model;

class SpecialOffers
{

    private $id;

    private $name;

    private $description;

    private $startDate;

    private $finishDate;

    private $noLimitTimeOffer;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * @param mixed $finishDate
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
    }

    /**
     * @return mixed
     */
    public function getNoLimitTimeOffer()
    {
        return $this->noLimitTimeOffer;
    }

    /**
     * @param mixed $noLimitTimeOffer
     */
    public function setNoLimitTimeOffer($noLimitTimeOffer)
    {
        $this->noLimitTimeOffer = $noLimitTimeOffer;
    }
}
