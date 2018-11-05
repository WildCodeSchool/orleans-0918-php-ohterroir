<?php
/**
 * Created by PhpStorm.
 * User: amadrocky
 * Date: 05/11/18
 * Time: 11:01
 */

namespace Model;


class CategoryGrowerManager extends AbstractManager
{

    const TABLE = 'categoryGrower';

    /**
     * CategoryGrowerManager constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(CategoryGrower $categoryGrower)
    {
        // prepared request
        $statement = $this->pdo->prepare("
        INSERT INTO $this->table (`categoryGrowerName`) VALUES (:categoryGrowerName)");
        $statement->bindValue(':categoryGrowerName', $categoryGrower->getCategoryGrowerName(), \PDO::PARAM_STR);
        $statement->execute();
    }
}
