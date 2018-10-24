<?php

namespace Model;

/**
 * Class SpecialOffers
 * @package Model
 */
class SpecialOffers extends \DateTime
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var \DateTime */
    private $startDate;

    /** @var \DateTime */
    private $finishDate;

    /** @var int */
    private $noLimitTimeOffer;

    /** @var string */
    private $imgLink;

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
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        $startTimeZone = new \DateTimeZone('+0200');
        return $startDate = new \DateTime($this->startDate, $startTimeZone);
    }


    /**
     * @param \DateTime $startDate
     * @return SpecialOffers
     */
    public function setStartDate(\DateTime $startDate) : SpecialOffers
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getFinishDate() : \DateTime
    {
        $startTimeZone = new \DateTimeZone('+0200');
        return $finishDate = new \DateTime($this->finishDate, $startTimeZone);
    }


    /**
     * @param \DateTime $finishDate
     * @return SpecialOffers
     */
    public function setFinishDate(\DateTime $finishDate) : SpecialOffers
    {
        $this->finishDate = $finishDate;
    }


    /**
     * @return bool
     */
    public function getNoLimitTimeOffer() : bool
    {
        return $this->noLimitTimeOffer;
    }


    /**
     * @param bool $noLimitTimeOffer
     * @return SpecialOffers
     */
    public function setNoLimitTimeOffer(bool $noLimitTimeOffer) : SpecialOffers
    {
        $this->noLimitTimeOffer = $noLimitTimeOffer;
    }


    /**
     * @return string
     */
    public function getImgLink(): string
    {
        return $this->imgLink;
    }


    /**
     * @param string $imgLink
     * @return SpecialOffers
     */
    public function setImgLink(string $imgLink) : SpecialOffers
    {
        $this->imgLink = $imgLink;
    }
}
