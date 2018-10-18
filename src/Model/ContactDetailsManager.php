<?php

namespace Model;

/**
 *
 */
class ContactDetailsManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'contactDetails';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
}
