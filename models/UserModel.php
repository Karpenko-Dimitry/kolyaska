<?php

/**
 *
 */
class UserModel
{

    public static function register($name, $email, $password, $role)
    {
        $PDO = Db::getConnection();
        $query = "INSERT INTO user 
              (name, email, password, role)
              VALUES (?, ?, ?, ?)
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->execute(array($name, $email, $password, $role));

        return $result;

    }

    public static function checkName($name)
    {
        if (strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkPhone($phone)
    {
        $phoneNumber = preg_replace('/[- ()]/', '', $phone);
        // var_dump($phoneNumber);
        $phoneNumber = preg_replace('/^.?38([0-9]+)$/', '$1', $phoneNumber);
//     var_dump($phoneNumber);

        if (preg_match('/^0[0-9]{8}/', $phoneNumber)) {
            return true;
        }
        return false;
    }

    public static function transformPhone($phone)
    {
        $phoneNumber = preg_replace('/[- ()]/', '', $phone);
        // var_dump($phoneNumber);
        $phoneNumber = preg_replace('/^.?38([0-9]+)$/', '$1', $phoneNumber);

        return $phoneNumber;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)
    {
        $PDO = Db::getConnection();
        $query = "SELECT COUNT(*) as count
              FROM user
              WHERE email = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$email]);
        $result = $STH->fetch();
        // echo $result['count'];
        if ($result['count']) {
            return false;
        } else {
            return true;
        }
    }

    public static function checkUserData($email, $password)
    {
        $PDO = Db::getConnection();
        $query = "SELECT id, password 
              FROM user 
              WHERE email = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute(array($email));
        $user = $STH->fetch();

        if (password_verify($password, $user['password'])) {

            return $user['id'];
        } else {
            return false;
        }
    }

    public static function auth($userId, $email)
    {
        $_SESSION['user'] = $userId;
        $_SESSION['log'] = $email;
    }

    public static function checkLogged()
    {

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header('location:/user/login/');

    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        } else {
            return true;
        }
    }

    public static function getUserById($userId)
    {
        $PDO = Db::getConnection();
        $query = "SELECT * 
              FROM user 
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute([$userId]);
        $user = $STH->fetch();
        return $user;
    }

    public static function edit($userId, $name, $password)
    {
        $PDO = Db::getConnection();
        $query = "UPDATE user 
              SET name = ?, password = ?
              WHERE id = ?
             ";
        $STH = $PDO->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $result = $STH->execute(array($name, $password, $userId));

    }

}