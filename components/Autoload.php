<?php

function classAutoLoader($class_name)
{
//    var_dump($class_name);
//    echo '<pre/>';
    $array_paths = array(
        '/models/',
        '/components/'
    );

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';

        if (is_file($path)) {
//            var_dump($path);
//            echo '<pre/>';
            include_once($path);
        }
    }
}

spl_autoload_register('classAutoLoader');