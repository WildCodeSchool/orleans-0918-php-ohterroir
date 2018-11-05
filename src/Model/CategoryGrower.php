<?php
/**
 * Created by PhpStorm.
 * User: amadrocky
 * Date: 05/11/18
 * Time: 11:00
 */

namespace Model;


class CategoryGrower
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $categoryGrowerName;

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
    public function getCategoryGrowerName()
    {
        return $this->categoryGrowerName;
    }

    /**
     * @param mixed $categoryGrowerName
     */
    public function setCategoryGrowerName($categoryGrowerName)
    {
        $this->categoryGrowerName = $categoryGrowerName;
    }


}
