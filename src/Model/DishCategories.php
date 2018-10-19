<?php

namespace Model;

/**
 * Class dishCategory
 * @package Model
 */
class DishCategories
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namePageHome;

    /**
     * @var string
     */
    private $urlPictureForHomePage;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) : DishCategories
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePageHome(): string
    {
        return $this->namePageHome;
    }

    /**
     * @param string $namePageHome
     */
    public function setNamePageHome(string $namePageHome) : DishCategories
    {
        $this->namePageHome = $namePageHome;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPictureForHomePage(): string
    {
        return $this->urlPictureForPageHome;
    }

    /**
     * @param string $urlPictureForHomePage
     */
    public function setUrlPictureForHomePage(string $urlPictureForHomePage) : DishCategories
    {
        $this->urlPictureForHomePage = $urlPictureForHomePage;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive) : DishCategories
    {
        $this->isActive = $isActive;

        return $this;
    }
}
