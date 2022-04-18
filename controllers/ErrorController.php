<?php


class ErrorController
{
    public function actionShow()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Ошибка 404 | коляска.укр';
        $description = 'Ошибка 404. Отсутстует страница по данному адресу | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }
        http_response_code(404);
        $categoryList = CategoryModel::getCategoryList();
        require_once(ROOT . '/views/site/error.php');

        return true;
    }
}