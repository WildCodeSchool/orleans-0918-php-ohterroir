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
    public function selectAllDishCategoriesIsActive(): array
    {
        return $this->pdo->query(
            'SELECT * FROM ' . $this->table . ' WHERE isActive',
            \PDO::FETCH_CLASS,
            $this->className
        )->fetchAll();
    }

    public function insert(DishCategory $dishCategory)
    {
         // prepared request
        $statement = $this->pdo->prepare("
        INSERT INTO $this->table ( 
        `namePageHome`,
        `namePageDish`,
        `description`,
        `complementaryInformation`,
        `urlPictureForPageHome`,
        `urlPictureForPageDish`,
        `isActive`) 
        VALUES (:namePageHome, :namePageDish, :description, :complementaryInformation, :urlPictureForPageHome,
        :urlPictureForPageDish,:isActive)");
        $statement->bindValue(':namePageHome', $dishCategory->getNamePageHome(), \PDO::PARAM_STR);
        $statement->bindValue(':namePageDish', $dishCategory->getNamePageDish(), \PDO::PARAM_STR);
        $statement->bindValue(':description', $dishCategory->getDescription(), \PDO::PARAM_STR);
        $statement->bindValue(':complementaryInformation', $dishCategory->getComplementaryInformation(),
        \PDO::PARAM_STR);
        $statement->bindValue(':urlPictureForPageHome', '', \PDO::PARAM_STR);
        $statement->bindValue(':urlPictureForPageDish', '', \PDO::PARAM_STR);
        $statement->bindValue(':isActive', false, \PDO::PARAM_BOOL);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}
