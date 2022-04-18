<?php

/**
 *
 */
class newsModel
{

    public static function getNewsItemById($id)
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM goods
              WHERE id = $id
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$id]);
        $result = $STH->fetch();
        return $result;
    }

    public static function getNewsList()
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM goods              
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $newsList = array();

        $i = 0;
        while ($row = $STH->fetch()) {
            $newsList[$i]['name'] = $row['name'];
            $i++;
        }
        return $newsList;
    }

}