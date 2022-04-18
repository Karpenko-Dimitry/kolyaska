<?php

/**
 *
 */
class AdminProductController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $productList = ProductModel::getAllStatusProduct();

        $title = 'Кабинет | коляска.укр';

        require_once(ROOT . '/views/admin/admin_product/index.php');

        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();
        $categoryList = CategoryModel::getCategoryList();

        if (isset($_POST['submit'])) {
            $option['type'] = $_POST['type'];
            $option['name'] = $_POST['name'];
            $option['period'] = $_POST['period'];
            $option['url'] = Rus2translit::translit($_POST['name']);
            $option['category_id'] = $_POST['category_id'];
            $option['code'] = $_POST['code'];
            $option['price'] = $_POST['price'];
            $option['presale_price'] = $_POST['presale_price'];
            $option['description1'] = $_POST['description1'];
            $option['description2'] = preg_replace('/(.*)\t(.*)\r/', "<tr><td>$1</td><td>$2</td></tr>", $_POST['description2']);
            $option['short_description'] = $_POST['short_description'];
            $option['availability'] = $_POST['availability'];
            $option['is_new'] = $_POST['is_new'];

            if ($option['presale_price'] > 0) {
                $option['is_sale'] = 1;
            } else {
                $option['is_sale'] = 0;
            }

            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $hash = md5(mt_rand(1000, 100000));
                $option['image'] = $hash . $_FILES['userfile']['name'];
            } else {
                $option['image'] = '';
            }

            $option['is_recommended'] = $_POST['is_recommended'];
            $option['status'] = $_POST['status'];


            $errors = false;

            if (isset($option['name']) && empty($option['name'])) {
                $errors['name'] = 'Введите поле название';
            }
            if (isset($option['price']) && empty($option['price'] && preg_match('/\d/', $option['price']))) {
                $errors['price'] = 'Введите целое число без дроби';
            }
            if (isset($option['presale_price']) && preg_match('/[^\d]/', $option['presale_price'])) {
                $errors['presale_price'] = 'Введите стоимость до скидки';
            } elseif (empty($option['presale_price'])) {
                $option['presale_price'] = 0;
            }

            if (!$errors) {
                $id = ProductModel::createProduct($option);

                if ($id) {
                    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/product/' . $option['image']);
                    }
                }
                header('location: /admin/product/');
            }
        }
        require_once(ROOT . '/views/admin/admin_product/create.php');

        return true;
    }

    public function actionEdit($productId)
    {
        self::checkAdmin();
        $categoryList = CategoryModel::getCategoryList();
        $product = ProductModel::getProductItemById($productId);

        if (isset($_POST['submit'])) {
            $option['type'] = $_POST['type'];
            $option['name'] = $_POST['name'];
            $option['period'] = $_POST['period'];
            $option['url'] = $product['url'];
            $option['category_id'] = $_POST['category_id'];
            $option['code'] = $_POST['code'];
            $option['price'] = $_POST['price'];
            $option['presale_price'] = $_POST['presale_price'];
            $option['description1'] = $_POST['description1'];
            $option['description2'] = preg_replace('/(.*)\t(.*)\r/', "<tr><td>$1</td><td>$2</td></tr>", $_POST['description2']);
            $option['short_description'] = $_POST['short_description'];
            $option['availability'] = $_POST['availability'];
            $option['is_new'] = $_POST['is_new'];

            if ($option['presale_price'] > 0) {
                $option['is_sale'] = 1;
            } else {
                $option['is_sale'] = 0;
            }

            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $hash = md5(mt_rand(1000, 100000));
                $option['image'] = $hash . $_FILES['userfile']['name'];
            } else {
                $option['image'] = $product['image'];
            }

            $option['is_recommended'] = $_POST['is_recommended'];
            $option['status'] = $_POST['status'];


            $errors = false;

            if (isset($option['name']) && empty($option['name'])) {
                $errors['name'] = 'Введите поле название';
            }
            if (isset($option['price']) && empty($option['price'] && preg_match('/\d/', $option['price']))) {
                $errors['price'] = 'Введите целое число без дроби';
            }
            if (isset($option['presale_price']) && preg_match('/[^\d]/', $option['presale_price'])) {
                $errors['presale_price'] = 'Введите стоимость до скидки';
            } elseif (empty($option['presale_price'])) {
                $option['presale_price'] = 0;
            }

            if (!$errors) {
                $result = ProductModel::editProductById($option, $productId);

                if ($result) {

                    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/product/' . $option['image']);
                    }
                }
                header('location: /admin/product/');
            }
        }

        require_once(ROOT . '/views/admin/admin_product/edit.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();
        $product = ProductModel::getProductItemById($id);

        if (isset($_POST['yes'])) {
            ProductModel::deleteProductById($id);
            header('location:/admin/product/');
        } elseif (isset($_POST['no'])) {
            header('location:/admin/product/');
        }

        require_once(ROOT . '/views/admin/admin_product/delete.php');
        return true;
    }
}

