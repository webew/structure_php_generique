<?php

namespace vendor\classes;

require_once '../config/configBdd.php';

class Bdd
{
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO("mysql:host=" . BDD_HOST . ";dbname=" . BDD_NAME . ";port=" . BDD_PORT . ";charset=utf8", BDD_USER, BDD_PASSWORD);
        }
        return self::$instance;
    }
}
