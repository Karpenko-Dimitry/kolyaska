<?php

/**
 *
 */
class OrderModel
{

    public static function save($userName, $userPhone, $userComment, $userid, $productsInCart, $orderStatus)
    {
        $products = json_encode($productsInCart);
        $userid = intval($userid);


        $PDO = Db::getConnection();
        $query = "INSERT INTO product_order
              (user_name, user_phone, user_comment, user_id, products, status)
              VALUES (?, ?, ?, ?, ?, ?)";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($userName, $userPhone, $userComment, $userid, $products, $orderStatus));

        return $result;
    }

    public static function getOrderList()
    {
        $PDO = Db::getConnection();
        $query = "SELECT *
              FROM product_order
              ORDER BY id DESC 
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $orderList = array();
        while ($row = $STH->fetch()) {
            $orderList[] = $row;
        }

        return $orderList;
    }

    public static function getOrderById($id)
    {
        $PDO = Db::getConnection();
        $query = "SELECT *
              FROM product_order
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$id]);

        $order = $STH->fetch();

        return $order;
    }

    public static function deleteOrder($id)
    {
        $PDO = Db::getConnection();
        $query = "DELETE 
              FROM product_order
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute([$id]);
    }

    public static function getOrderByClientId($userId)
    {
        $PDO = Db::getConnection();
        $query = "SELECT *
              FROM product_order
              WHERE user_id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$userId]);
        $orderList = array();

        while ($row = $STH->fetch()) {
            $orderList[] = $row;
        }

        return $orderList;

    }

    public static function getOrderTotalPrice($productsInOrder)
    {
        $productsInOrder = json_decode($productsInOrder, true);
        $totalPrice = 0;

        foreach ($productsInOrder as $product) {
            $totalPrice += $product['price'] * $product['count'];
        }

        return $totalPrice;
    }

}