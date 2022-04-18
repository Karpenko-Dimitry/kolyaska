<?php

/**
 *
 */
class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getUri()
    {


        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
//    if (strrpos($_SERVER['REQUEST_URI'], '/') !== strlen($_SERVER['REQUEST_URI']) - 1)
//    {
//      header('location:'.$_SERVER['REQUEST_URI'].'/');
//    }

        $uri = $this->getUri();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~^$uriPattern$~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segment = explode('/', $internalRoute);
                $controllerName = ucfirst(array_shift($segment)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segment));
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                $parametrs = $segment;
                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                }
                $controllerObject = new $controllerName();
                $result = call_user_func_array(array($controllerObject, $actionName), $parametrs);

                if ($result != null) {
                    break;
                }
            }
        }
    }
}