<?php


class SearchModel
{
    public static function showResult($searchQuery)
    {
        $searchQuery = '%' . $searchQuery . '%';
        $PDO = Db::getConnection();

        $query = "SELECT *
              FROM products
              WHERE name LIKE ?
              OR url LIKE ?
              OR type LIKE ?
              OR code LIKE ?
              OR url LIKE ?
              OR description1 LIKE ?
              OR description2 LIKE ?
              OR short_description LIKE ?
             ";

        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute(array($searchQuery, $searchQuery, $searchQuery, $searchQuery, $searchQuery, $searchQuery, $searchQuery, $searchQuery));

        $searchResult = array();

        while ($row = $STH->fetch()) {
            $searchResult[] = $row;
        }

        return $searchResult;
    }

}