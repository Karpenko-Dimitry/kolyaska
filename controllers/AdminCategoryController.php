<?php

/**
 *
 */
class AdminCategoryController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();
        $categoryList = CategoryModel::getAllStatusCategoryList();

        require_once(ROOT . '/views/admin/admin_category/index.php');
        return true;

    }

    public function actionEdit($id)
    {
        self::checkAdmin();

        $category = CategoryModel::getCategoryById($id);

        if (isset($_POST['submit'])) {
            $option['name'] = $_POST['name'];
            $option['description'] = $_POST['description'];
            $option['short_description'] = $_POST['short_description'];
            $option['url'] = $category['url'];
            $option['sort_order'] = $_POST['sort_order'];
            $option['status'] = $_POST['status'];
            $option['is_recommended'] = $_POST['is_recommended'];
            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $hash = md5(mt_rand(500, 5000));
                $option['image'] = $hash . $_FILES['userfile']['name'];
            } else {
                $option['image'] = $category['image'];
            }

            $errors = false;

            if (isset($option['name']) && empty($option['name'])) {
                $errors['name'] = 'Введите поле название';
            }

            if (isset($option['sort_order'])) {
                if (preg_match('/[^\d]/', $option['sort_order']) || empty($option['sort_order'])) {
                    $errors['sort_order'] = 'Введите номер по порядку';
                }

                if (!$errors) {
                    $result = CategoryModel::editCategoryById($option, $id);
                }

                if ($result) {
                    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/category/' . $option['image']);
                    }
                    header('location:/admin/category');
                }

            }
        }

        require_once(ROOT . '/views/admin/admin_category/edit.php');
        return true;

    }

    public function actionCreate()
    {
        self::checkAdmin();
        $nextOrderNumber = CategoryModel::getLastOrderNumber() + 1;

        if (isset($_POST['submit'])) {
            $option['name'] = $_POST['name'];
            $option['description'] = $_POST['description'];
            $option['short_description'] = $_POST['short_description'];
            $option['url'] = Rus2translit::translit($_POST['name']);
            $option['sort_order'] = $_POST['sort_order'];
            $option['status'] = $_POST['status'];
            $option['is_recommended'] = $_POST['is_recommended'];
            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $hash = md5(mt_rand(500, 5000));
                $option['image'] = $hash . $_FILES['userfile']['name'];
            } else {
                $option['image'] = '';
            }

            $errors = false;

            if (isset($option['name']) && empty($option['name'])) {
                $errors['name'] = 'Введите поле название';
            }

            if (isset($option['sort_order'])) {
                if (preg_match('/[^\d]/', $option['sort_order']) || empty($option['sort_order'])) {
                    $errors['sort_order'] = 'Введите номер по порядку';
                }

                if (!$errors) {
                    $result = CategoryModel::createCategory($option);
                    if ($result) {
                        if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                            move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/images/category/' . $option['image']);
                        }
                        header('location:/admin/category');
                    }
                }
            }
        }
        require_once(ROOT . '/views/admin/admin_category/create.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();
        $category = CategoryModel::getCategoryById($id);

        if (isset($_POST['yes'])) {
            CategoryModel::deleteCategoryById($id);
            header('location:/admin/category');
        } elseif (isset($_POST['no'])) {
            header('location:/admin/category');
        }

        require_once(ROOT . '/views/admin/admin_category/delete.php');
        return true;
    }
}