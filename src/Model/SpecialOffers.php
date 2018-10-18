<?php

namespace Model;

class SpecialOffers
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var string */
    private $startDate;

    /** @var string */
    private $finishDate;

    /** @var int */
    private $noLimitTimeOffer;


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @param int $id
     * @return SpecialOffers
     */
    public function setId(int $id) : SpecialOffers
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }


    /**
     * @param string $name
     * @return SpecialOffers
     */
    public function setName(string $name) : SpecialOffers
    {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }


    /**
     * @param string $description
     * @return SpecialOffers
     */
    public function setDescription(string $description) : SpecialOffers
    {
        $this->description = $description;
    }


    /**
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }


    /**
     * @param string $startDate
     * @return SpecialOffers
     */
    public function setStartDate(string $startDate) : SpecialOffers
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getFinishDate() : string
    {
        return $this->finishDate;
    }


    /**
     * @param string $finishDate
     * @return SpecialOffers
     */
    public function setFinishDate(string $finishDate) : SpecialOffers
    {
        $this->finishDate = $finishDate;
    }


    /**
     * @return int
     */
    public function getNoLimitTimeOffer() : int
    {
        return $this->noLimitTimeOffer;
    }


    /**
     * @param int $noLimitTimeOffer
     * @return SpecialOffers
     */
    public function setNoLimitTimeOffer(int $noLimitTimeOffer) : SpecialOffers
    {
        $this->noLimitTimeOffer = $noLimitTimeOffer;
    }
}
