<?php


class ContactsController
{
    public function actionIndex()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Контакты';
        $description = 'Контактные данные интернет магазина коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        require_once(ROOT . '/views/contacts/index.php');

        return true;
    }
}