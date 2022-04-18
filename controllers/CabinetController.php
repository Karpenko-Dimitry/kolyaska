<?php

/**
 *
 */
class CabinetController
{

    public function actionIndex()
    {

        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Кабинет | коляска.укр';
        $description = 'Кабинет постоянного клиента | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $userId = UserModel::checkLogged();
        $user = UserModel::getUserById($userId);

        include(ROOT . '/views/cabinet/index.php');
        return true;
    }

    public function actionEdit()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Кабинет - редактирование | коляска.укр';
        $description = 'Редактирование данных постоянного клиента | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $userId = UserModel::checkLogged();

        $user = UserModel::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];


            $errors = false;

            if (!UserModel::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2 символов';
            };


            if (!UserModel::checkPassword($password)) {
                $errors[] = 'Пароль должен быть не короче 6 символов';
            };


            if ($errors == false) {

                $result = UserModel::edit($userId, $name, $password);
            }
        }

        require(ROOT . '/views/cabinet/edit.php');
        return true;

    }

    public function actionHistory()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Кабинет - редактирование | коляска.укр';
        $description = 'Редактирование данных постоянного клиента | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }
        $userId = UserModel::checkLogged();
        $orderList = OrderModel::getOrderByClientId($userId);


        require_once(ROOT . '/views/cabinet/history.php');
        return true;
    }
}