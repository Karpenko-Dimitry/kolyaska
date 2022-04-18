<?php

/**
 *
 */
class Db
{
    protected static $PDO = NULL;

    public static function setConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";

        return new PDO($dsn, $params['user'], $params['pass']);
    }

    public static function getConnection()
    {
        $pdo = self::$PDO;

        if (!self::$PDO) {
            $pdo = self::setConnection();
        }

        return $pdo;
    }
}