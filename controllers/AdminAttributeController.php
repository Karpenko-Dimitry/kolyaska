<?php


class AdminAttributeController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $productList = ProductModel::getAllStatusProduct();
        require_once(ROOT . '/views/admin/admin_attribute/index.php');
        return true;
    }

    public function actionCreate($ProductId)
    {
        self::checkAdmin();
        $attributeListByProduct = AttributeModel::getAllStatusAttributeListByProduct($ProductId);

        if (isset($_POST['submit'])) {
            $option['product_id'] = $ProductId;
            $option['color_name'] = $_POST['color_name'];
            $option['color_code'] = $_POST['color_code'];
            $option['status'] = $_POST['status'];

            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $hash = md5(mt_rand(1000, 100000));
                $option['image'] = $hash . $_FILES['userfile']['name'];
            } else {
                $option['image'] = '';
            }
            $result = AttributeModel::createAttribute($option);
        }


        if (isset($result) && $result) {
            if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/product/' . $option['image']);
            }

            header('location:/admin/attribute/create/product-' . $ProductId . '/');
        }

        require_once(ROOT . '/views/admin/admin_attribute/create.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();
        $attribute = AttributeModel::getAttributeById($id);

        if (isset($_POST['yes'])) {
            AttributeModel::deleteAttributeById($id);
            header("location:/admin/attribute/create/product-{$attribute['product_id']}/");
        }


        require_once(ROOT . '/views/admin/admin_attribute/delete.php');
        return true;
    }

    public function actionEdit($id)
    {
        $attribute = AttributeModel::getAttributeById($id);

        if (isset($_POST['submit'])) {
            $option['product_id'] = $attribute['product_id'];
            $option['color_name'] = $_POST['color_name'];
            $option['color_code'] = $_POST['color_code'];
            $option['status'] = $_POST['status'];

            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $hash = md5(mt_rand(1000, 100000));
                $option['image'] = $hash . $_FILES['userfile']['name'];
            } else {
                $option['image'] = $attribute['image'];
            }
            $result = AttributeModel::editAttributeById($option, $id);
        }

        if (isset($result) && $result) {
            if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/product/' . $option['image']);
            }

            header('location:/admin/attribute/create/product-' . $attribute['product_id'] . '/');
        }


        require_once(ROOT . '/views/admin/admin_attribute/edit.php');
        return true;
    }

}