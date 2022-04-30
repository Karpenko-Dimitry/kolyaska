<?php

/**
 *
 */
class ProductModel
{

    const ITEMS_ON_PAGE = 9;

    public static function getProductList()
    {
        $PDO = Db::getConnection();

        $query = 'SELECT * 
              FROM products
              WHERE status=1
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $productList = array();

        while ($row = $STH->fetch()) {
            $productList[] = $row;
        }

        return $productList;
    }

    public static function getAllStatusProduct()
    {
        $PDO = Db::getConnection();

        $query = 'SELECT * 
              FROM products              
             ';
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $productList = array();

        while ($row = $STH->fetch()) {
            $productList[] = $row;
        }

        return $productList;
    }

    public static function getProductItemById($id)
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE id = $id
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$id]);
        $productItem = $STH->fetch();
        return $productItem;
    }

    public static function getProductItemByUrl($url)
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status = 1 and url = ?               
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$url]);
        $productItem = $STH->fetch();
        return $productItem;
    }

    public static function getProductItemByCategory($categoryId, $page)
    {

        $items_on_page = intval(self::ITEMS_ON_PAGE);
        $start = ($page - 1) * $items_on_page;
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status = 1 and category_id = ?
              ORDER BY price ASC 
              LIMIT $start, $items_on_page
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$categoryId]);
        $productList = array();

        while ($row = $STH->fetch()) {
            $productList[] = $row;
        }

        return $productList;
    }

    public static function getSaleProducts()
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status=1 and is_sale = 1
              ORDER BY id DESC
              LIMIT 3
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $saleProducts = array();

        while ($row = $STH->fetch()) {
            $saleProducts[] = $row;
        }

        return $saleProducts;
    }

    public static function getNewProducts()
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status=1
              
              ORDER BY id DESC
              LIMIT 6
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        $newProducts = array();

        while ($row = $STH->fetch()) {
            $newProducts[] = $row;
        }

        return $newProducts;
    }

    public static function LastNewProductInCategory($categoryId)
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status=1 and category_id = ?          
              ORDER BY id DESC
              LIMIT 1
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$categoryId]);

        while ($row = $STH->fetch()) {
            $lastNewProduct = $row;
        }
        if (isset($lastNewProduct)) {
            return $lastNewProduct;
        } else {
            return false;
        }
    }

    public static function LastThreeProductInCategory($categoryId)
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status=1 and category_id = ?          
              ORDER BY id DESC
              LIMIT 1,3
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$categoryId]);

        while ($row = $STH->fetch()) {
            $lastNewProduct[] = $row;
        }
        if (isset($lastNewProduct)) {
            return $lastNewProduct;
        } else {
            return false;
        }
    }

    public static function getTotalProductsInCategory($categoryId)
    {
        $PDO = Db::getConnection();
        $query = "SELECT COUNT(category_id) as count 
              FROM products
              WHERE status = 1 and category_id = ?             
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$categoryId]);
        $TotalProducts = $STH->fetch();

        return $TotalProducts['count'];
    }

    public static function getProductsByIds($productIds)
    {
        $ids = implode(',', $productIds);
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM products
              WHERE status=1 AND id IN ($ids)
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();

        $products = array();

        while ($row = $STH->fetch()) {
            $products[] = $row;
        }

        return $products;
    }

    public static function createProduct($option)
    {

        $PDO = DB::getConnection();
        $query = "INSERT INTO products
              (type, name, url, category_id, code, price, period, presale_price, description1, description2, short_description, image, availability, is_new, is_sale, is_recommended, status)
              VALUES
              (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
              ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['type'], $option['name'], $option['url'], $option['category_id'], $option['code'], $option['price'], $option['period'], $option['presale_price'], $option['description1'], $option['description2'], $option['short_description'], $option['image'], $option['availability'], $option['is_new'], $option['is_sale'], $option['is_recommended'], $option['status']));

        if ($result) {
            return $id = $PDO->lastInsertId();
        }

        return 0;

    }

    public static function deleteProductById($id)
    {
        $PDO = Db::getConnection();
        $query = "
              DELETE FROM products
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$id]);

    }

    public static function editProductById($option, $id)
    {
        $PDO = DB::getConnection();
        $query = "UPDATE products
              SET type = ?, name = ?, url = ?, category_id = ?, code = ?, price = ?, period = ?, presale_price = ?, description1 = ?, description2 = ?, short_description = ?, image = ?, availability = ?, is_new = ?, is_sale = ?, is_recommended = ?, status = ?
              WHERE id = $id              
              ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($option['type'], $option['name'], $option['url'], $option['category_id'], $option['code'], $option['price'], $option['period'], $option['presale_price'], $option['description1'], $option['description2'], $option['short_description'], $option['image'], $option['availability'], $option['is_new'], $option['is_sale'], $option['is_recommended'], $option['status']));

//     var_dump($result);

        if ($result) {
            return true;
        }

        return 0;
    }

    public static function minPriceByCategory($categoryId)
    {
        $PDO = Db::getConnection();
        $query = "SELECT MIN(price) as minprice 
              FROM products
              WHERE status = 1 and category_id = ?             
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$categoryId]);
        $minPrice = $STH->fetch();

        return $minPrice['minprice'];
    }


}