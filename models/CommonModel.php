<?php

/**
 *
 */
class CommonModel
{

    public static function getCommonData()
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM common";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $result = $STH->fetch();
        return $result;
    }

    public static function editCommonData($option)
    {
        $PDO = Db::getConnection();
        $query = "UPDATE common 
              SET dom = ?, site_name = ?, phone1 = ?, phone2 = ?, ex_rate = ?
              WHERE id = 1
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['dom'], $option['site_name'], $option['phone1'], $option['phone2'], $option['ex_rate']));

        return $result;

    }
}