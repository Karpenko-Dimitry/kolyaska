<?php
/**
 *
 */
class CartModel
{

    public static function addProduct($id, $color)
    {
        $id = intval($id);

        $product = ProductModel::getProductItemById($id);
        $productPrice = Exchange::exchangePriceNoformat($product['price']);

        $productInCart = array();

        if (isset($_SESSION['products'])) {
            $productInCart = $_SESSION['products'];
        };

        if (array_key_exists($id, $productInCart)) {
            $productInCart[$id]['count']++;
            $productInCart[$id]['price'] = $productPrice;
            $productInCart[$id]['color'] = $color;
        } else {
            $productInCart[$id]['count'] = 1;
            $productInCart[$id]['price'] = $productPrice;
            $productInCart[$id]['color'] = $color;
        }

        $_SESSION['products'] = $productInCart;


        return self::countItems();

    }

    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $products) {
                $count += $products['count'];
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }

        return false;
    }

    public static function getTotalPrice($prod)
    {

        $productsInCart = self::getProducts();
        $total = 0;

        if ($productsInCart) {
            // var_dump($prod);
            foreach ($prod as $item) {
                $total += $productsInCart[$item['id']]['price'] * $productsInCart[$item['id']]['count'];
            }
        }

        return $total;
    }

    public static function clear()
    {

        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }


}