<?php

namespace Model;

class DishCategoryManager extends AbstractManager
{
    /**
     * table's name
     */
    const TABLE = 'dishCategory';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    /**
     * Return the active dish categories
     */
    public function selectAllDishCategoriesIsActive() : array
    {
        return $this->pdo->query(
            'SELECT * FROM ' . $this->table . ' WHERE isActive',
            \PDO::FETCH_CLASS,
            $this->className
        )->fetchAll();
    }
}
