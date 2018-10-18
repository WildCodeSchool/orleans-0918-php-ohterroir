<?php

namespace Model;

class SpecialOffersManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'specialOffers';

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
    public function show() : array
    {
        return $this->pdo->query(
            'SELECT * FROM ' . $this->table .
            ' WHERE specialOffers.startdate <= DATE(NOW()) 
            AND specialOffers.finishdate >= DATE(NOW()) 
            OR specialOffers.nolimittimeoffer = 1',
            \PDO::FETCH_CLASS,
            $this->className
        )->fetchAll();
    }
}
