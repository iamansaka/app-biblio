<?php

namespace Model;

use PDO;

/**
 * Database
 * Connexion à la base de données
 * 
 * Liste des fonctions
 * - getPDO
 * 
 */
class Database
{

    private const HOSTNAME = "localhost";
    private const DATANAME = "myApp";
    private const USERNAME = "root";
    private const PASSWORD = "root";

    protected function getPDO()
    {
        $dsn = 'mysql:dbname=' . self::DATANAME . ';host=' . self::HOSTNAME;
        $user = self::USERNAME;
        $password = self::PASSWORD;
        $db = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
