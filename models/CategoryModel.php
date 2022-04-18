<?php
/**
 *
 */
class CategoryModel
{

    public static function getCategoryList()
    {
        $PDO = Db::getConnection();
        $query = 'SELECT *
              FROM category 
              WHERE status = 1
              ORDER BY sort_order ASC
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();

        $categoryList = array();

        while ($row = $STH->fetch()) {
            $categoryList[] = $row;
        }

        return $categoryList;
    }

    public static function getAllStatusCategoryList()
    {
        $PDO = Db::getConnection();
        $query = 'SELECT *
              FROM category              
              ORDER BY sort_order ASC
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();

        $categoryList = array();

        while ($row = $STH->fetch()) {
            $categoryList[] = $row;
        }

        return $categoryList;
    }

    public static function getCategoryById($id)
    {
        $PDO = Db::getConnection();
        $query = 'SELECT * 
              FROM category 
              WHERE id = ?              
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$id]);
        $result = $STH->fetch();
        return $result;
    }

    public static function getCategoryByUrl($url)
    {
        $PDO = Db::getConnection();
        $query = 'SELECT * 
              FROM category 
              WHERE url = ?              
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$url]);
        $result = $STH->fetch();
        return $result;
    }

    public static function editCategoryById($option, $id)
    {
        $PDO = DB::getConnection();
        $query = "UPDATE category 
              SET url = ?, name = ?, description = ?, short_description = ?, sort_order = ?, image = ?, is_recommended = ?, status = ?
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['url'], $option['name'], $option['description'], $option['short_description'], $option['sort_order'], $option['image'], $option['is_recommended'], $option['status'], $id));

        return $result;
    }

    public static function createCategory($option)
    {
        $PDO = DB::getConnection();
        $query = "INSERT INTO category 
              (url, name, description, short_description, sort_order, image, is_recommended, status) 
              VALUES 
              (?, ?, ?, ?, ?, ?, ?, ?)
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['url'], $option['name'], $option['description'], $option['short_description'], $option['sort_order'], $option['image'], $option['is_recommended'], $option['status']));

        return $result;
    }

    public static function deleteCategoryById($id)
    {
        $PDO = Db::getConnection();
        $query = "DELETE FROM category
              WHERE id = ?   
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute([$id]);
        return $result;
    }

    public static function getLastOrderNumber()
    {
        $PDO = Db::getConnection();
        $query = "SELECT MAX(sort_order) as max
                FROM category   
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $result = $STH->fetch();
        return $result['max'];
    }

    public static function getRecommendedCategory()
    {
        $PDO = Db::getConnection();
        $query = 'SELECT * 
              FROM category 
              WHERE is_recommended = 1              
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $result = array();
        while ($row = $STH->fetch()) {
            $result[] = $row;
        }
        return $result;
    }

}