<?php


class AdminCommonController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $commonData = CommonModel::getCommonData();
        $сurrentExRate = Exchange::getCurrentExRate();

        require_once(ROOT . '/views/admin/admin_common/index.php');
        return true;
    }

    public function actionEdit()
    {
        self::checkAdmin();

        $commonData = CommonModel::getCommonData();
        $сurrentExRate = Exchange::getCurrentExRate();


        if (isset($_POST['submit'])) {
            $option['dom'] = $_POST['dom'];
            $option['site_name'] = $_POST['site_name'];
            $option['phone1'] = $_POST['phone1'];
            $option['phone2'] = $_POST['phone2'];
            $option['ex_rate'] = $_POST['ex_rate'];

            $errors = false;

            if (strlen($option['dom']) < 3) {
                $errors[] = 'Введите правильный домен';
            }
            if (strlen($option['site_name']) < 3) {
                $errors[] = 'Введите правильное название сайта';
            }

            if (preg_match('/^[0-9]+.?[0-9]*$/', $option['ex_rate']) == 0) {
                $errors[] = 'Введите правильный курс валюты (разделитель ТОЧКА)';
            }

            if (!$errors) {
                $result = CommonModel::editCommonData($option);
            }

            if ($result) {
                header('location:/admin/common/');
            }

        }


        require_once(ROOT . '/views/admin/admin_common/edit.php');
        return true;
    }
}