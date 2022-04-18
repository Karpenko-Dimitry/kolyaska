<?php

//Front controller

//1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

//2. Подключение файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
// require_once(ROOT.'/components/Router.php'); - теперь автолоудер подключает эти файлы автоматом
// require_once(ROOT.'/components/Db.php'); - теперь автолоудер подключает эти файлы автоматом
//3. Подключение к БД

//4. Запуск Роутера

$router = new Router();
$router->run();

//$exchange = new Exchange();
//$exrate = $exchange->getCurrentExRate();
//$_SESSION['exrate'] = $exrate;