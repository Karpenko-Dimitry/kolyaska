<?php

/**
 *
 */
class CartController
{

    public function actionAdd($id)
    {
        CartModel::addProduct($id);

//    $referer = $_SERVER['HTTP_REFERER'];

        header("location: /");
    }

    public function actionAddAjax($id, $color)
    {
        echo CartModel::addProduct($id, $color);
        return true;
    }

    public function actionIndex()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Корзина | коляска.укр';
        $description = 'Корзина товаров клиента | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $productsInCart = false;

        $productsInCart = CartModel::getProducts();

        // var_dump($productsInCart);

        if ($productsInCart) {
            $productIds = array_keys($productsInCart);
            // var_dump($productIds);
            $products = ProductModel::getProductsByIds($productIds);
            // var_dump($products);
            $totalPrice = CartModel::getTotalPrice($products);
            // var_dump($totalPrice);
        }
        require(ROOT . '/views/cart/index.php');

        return true;

    }

    public function actionCheckout()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $title = 'Корзина | коляска.укр';
        $description = 'Корзина товаров клиента | коляска.укр';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $result = false;

        if (isset($_POST['submit'])) {
            $_POST = Validation::validatePost($_POST);
            $userName = $_POST['name'];
            $userPhone = UserModel::transformPhone($_POST['userPhone']);
            $userComment = $_POST['userComment'];
            $orderStatus = 1;

            $errors = false;

            if (strlen($userComment) < 1) {
                $userComment = 'нет';
            }

            if (!UserModel::checkName($userName)) {
                $errors['name'] = 'Введите правильное имя';
            }
            if (!UserModel::checkPhone($userPhone)) {
                $errors['phone'] = 'Введите правильный телефон';
            }

            if ($errors == false) {
                $productsInCart = CartModel::getProducts();

                if (UserModel::isGuest()) {
                    $userid = false;
                } else {
                    $userid = UserModel::checkLogged();
                }
                $result = OrderModel::save($userName, $userPhone, $userComment, $userid, $productsInCart, $orderStatus);

                $adminEmail = "prokat.ukraine@gmail.com";

                $subject = "Новый заказ|коляска.укр";

                $message = '
          <html>
          <head>
           <title>Заказ</title>
             <style>              
                th,td{
                  border: 1px solid black;
                  padding: 10px;
                  text-align: center;
            
                }
                table{
                  border-collapse: collapse;
                }
              </style>
          </head>
          <body>
        ';
                $message .= "<b>У вас новый заказ от:</b> {$userName} <br> <br> 
                     <b>Контактный тел.:</b> <a href='tel:{$userPhone}'>{$userPhone}</a> <br> <br> 
                     <b>Комментарий к заказу:</b> {$userComment}. </br> </br> ";
                $message .= '<table>
                     <tr>
                      <th>№</th>
                      <th>Название</th>
                      <th>Количество</th>
                      <th>Цена</th>
                     </tr>
                    ';
                foreach ($products as $key => $productItem) {
                    $quantity = $productsInCart[$productItem['id']]['count'];
                    $color = str_replace('%20', ' ', ucfirst($productsInCart[$productItem['id']]['color']));
                    $price = Exchange::exchangePrice($productItem['price']);
                    $key++;
                    $message .= "
                       <tr>
                        <th>$key</th>
                        <th>{$productItem['type']} {$productItem['name']} $color</th>
                        <th>{$quantity}</th>
                        <th>{$price}</th>
                       </tr>                          
                      ";
                }
                $message .= '</table>';
                $message .= '
          </body>
          </html>
        ';
                $headers = "From: kolyaska.ukr@gmail.com\r\n";
                $headers = "Reply-To: kolyaska.ukr@gmail.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

                $mailList = mail($adminEmail, $subject, $message, $headers);
                CartModel::clear();


            } else {
                $productsInCart = CartModel::getProducts();
                $productIds = array_keys($productsInCart);
                $products = ProductModel::getProductsByIds($productIds);
                $totalPrice = CartModel::getTotalPrice($products);
                $totalQuantity = CartModel::countItems();
            }


        } else {
            $productsInCart = CartModel::getProducts();


            if (!$productsInCart) {
                header('location: /');
            } else {
                $productIds = array_keys($productsInCart);
                $products = ProductModel::getProductsByIds($productIds);
                $totalPrice = CartModel::getTotalPrice($products);
                $totalQuantity = CartModel::countItems();

                $userName = false;
                $userPhone = false;
                $userComment = false;
                if (!UserModel::isGuest()) {
                    $userId = UserModel::checkLogged();
                    $user = UserModel::getUserById($userId);

                    $userName = $user['name'];
                }
            }
        }


        require(ROOT . '/views/cart/checkout.php');

        return true;
    }

    public function actionDelete($id)
    {
        if (isset($_SESSION['products'])) {
            if ($_SESSION['products'][$id]['count'] == 1) {
//        echo '111';
                unset($_SESSION['products'][$id]);
            } else {
//        var_dump($_SESSION['products']);
                $_SESSION['products'][$id]['count']--;
            }

        }

        header('location: /cart/');
    }

    public function actionDeleteAll()
    {
        unset($_SESSION['products']);
        header('location: /cart/');
    }
}

