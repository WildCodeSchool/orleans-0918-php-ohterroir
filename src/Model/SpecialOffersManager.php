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
     * Affiche les offres spéciales en fonction de la date du jour,
     * lorsque la date du jour est comprise dans la période de l'offre et que celle-ci
     * est une offre limitée dans le temps.
     * Affiche aussi en permanence, les offres spéciales non limitées dans le temps.
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
