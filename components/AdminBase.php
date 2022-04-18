<?php

/**
 *
 */
abstract class AdminBase
{

    public static function checkAdmin()
    {
        $userId = UserModel::checkLogged();
        $user = UserModel::getUserById($userId);


        if ($user['role'] == 'admin' && password_verify($user['email'], $_SESSION['log'])) {
            return true;
        }

        die ('Доступ заблокирован');
    }
}