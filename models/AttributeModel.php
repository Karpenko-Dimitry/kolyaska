<?php


class AttributeModel
{

    public static function getAttributeListByProduct($productId)
    {
        $PDO = Db::getConnection();
        $query = "
              SELECT *
              FROM attribute
              WHERE product_id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$productId]);

        $attributeList = array();
        while ($row = $STH->fetch()) {
            $attributeList[] = $row;
        }

        return $attributeList;
    }

    public static function getAllStatusAttributeListByProduct($productId)
    {
        $PDO = Db::getConnection();
        $query = "
              SELECT *
              FROM attribute
              WHERE product_id = ?
              ORDER BY id DESC 
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$productId]);

        $attributeList = array();
        while ($row = $STH->fetch()) {
            $attributeList[] = $row;
        }

        return $attributeList;
    }

    public static function createAttribute($option)
    {

        $PDO = Db::getConnection();
        $query = "
              INSERT INTO attribute
              (product_id, color_name, color_code, image, status)
              VALUES
              (?, ?, ?, ?, ?)
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['product_id'], $option['color_name'], $option['color_code'], $option['image'], $option['status']));


        return $result;
    }

    public static function getAttributeById($Id)
    {
        $PDO = Db::getConnection();
        $query = "
              SELECT *
              FROM attribute
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$Id]);
        $attribute = $STH->fetch();

        return $attribute;
    }

    public static function deleteAttributeById($Id)
    {
        $PDO = Db::getConnection();
        $query = "
              DELETE 
              FROM attribute
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute([$Id]);

        return $result;
    }

    public static function editAttributeById($option, $id)
    {
        $PDO = Db::getConnection();
        $query = "
              UPDATE attribute 
              SET product_id = ?, color_name = ?, color_code = ?, image = ?, status = ?
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['product_id'], $option['color_name'], $option['color_code'], $option['image'], $option['status'], $id));

        return $result;
    }

}