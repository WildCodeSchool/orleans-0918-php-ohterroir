<?php

namespace Model;


class DishManager extends AbstractManager
{
    /**
     * table's name
     */
    const TABLE = 'dish';

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
    public function selectDishes() : array
    {
        return $this->pdo->query(
            'SELECT * FROM ' . $this->table . ' JOIN dishSubcategory ON dishSubcategory.id = dish.dishSubcategoryId JOIN dishCategory ON dishCategory.Id = dishSubcategory.dishCategoryId',
            \PDO::FETCH_CLASS,
            $this->className
        )
            ->fetchAll();
    }
}