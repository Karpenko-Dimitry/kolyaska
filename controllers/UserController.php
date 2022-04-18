<?php

/**
 *
 */
class UserController
{

    public function actionRegister()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Регистрация';
        $description = 'Регистрация постоянного клиента';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $_POST = Validation::validatePost($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = 'client';


            $errors = false;

            if (!UserModel::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2 символов';
            };

            if (!UserModel::checkEmail($email)) {
                $errors[] = 'Неправильный e-mail';
            };

            if (!UserModel::checkEmailExists($email)) {
                $errors[] = 'Такой e-mail уже существует';
            };

            if (!UserModel::checkPassword($password)) {
                $errors[] = 'Пароль должен быть не короче 6 символов';
            };


            if ($errors == false) {

                $result = UserModel::register($name, $email, $password, $role);
            }
        }
        require(ROOT . '/views/user/register.php');
        return true;
    }

    public function actionLogin()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();

        $title = 'Вход в кабинет';
        $description = 'Вход в кабинет постоянного клиента | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = htmlspecialchars($_POST['email']);
            $password = $_POST['password'];


            $errors = false;


            if (!UserModel::checkEmail($email)) {
                $errors[] = 'Неправильный e-mail';
            };

            if (!UserModel::checkPassword($password)) {
                $errors[] = 'Пароль должен быть не короче 6 символов';
            };

            $userId = UserModel::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                UserModel::auth($userId, password_hash($email, PASSWORD_DEFAULT));
                header('location: /cabinet/');
            }


        }

        require(ROOT . '/views/user/login.php');
        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['log']);
        $referer = $_SERVER['HTTP_REFERER'];
        header("location: $referer");
    }
}