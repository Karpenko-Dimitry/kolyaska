<?php


class DeliveryController
{

    public function actionIndex()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Доставка и оплата';
        $description = 'Условия доставки и способы оплаты интернет магазина коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        require_once(ROOT . '/views/delivery/index.php');

        return true;
    }

}