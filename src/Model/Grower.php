<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 29/10/18
 * Time: 17:38
 */

namespace Model;


class Grower
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $growerName;

    /**
     * @var string
     */
    private $growerDescription;

    /**
     * @var string
     */
    private $growerLocalisation;

    /**
     * @var bool
     */
    private $growerIsActive;

    /**
     * @var string
     */
    private $growerSiteWeb;

    /**
     * @var string
     */
    private $image;

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getGrowerName()
    {
        return $this->growerName;
    }

    public function setGrowerName($growerName)
    {
        $this->growerName = $growerName;
    }

    public function getGrowerDescription()
    {
        return $this->growerDescription;
    }

    public function setGrowerDescription($growerDescription)
    {
        $this->growerDescription = $growerDescription;
    }

    public function getGrowerLocalisation()
    {
        return $this->growerLocalisation;
    }

    public function setGrowerLocalisation($growerLocalisation)
    {
        $this->growerLocalisation = $growerLocalisation;
    }

    public function getGrowerIsActive()
    {
        return $this->growerIsActive;
    }

    public function setGrowerIsActive($growerIsActive)
    {
        $this->growerIsActive = $growerIsActive;
    }

    public function getGrowerSiteWeb()
    {
        return $this->growerSiteWeb;
    }

    public function setGrowerSiteWeb($growerSiteWeb)
    {
        $this->growerSiteWeb = $growerSiteWeb;
    }

}