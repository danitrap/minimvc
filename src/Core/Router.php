<?php

namespace Mvc\Core;

class Router
{
    private $routes;

    public function load($routes)
    {
        $this->routes = $routes;

        return $this;
    }

    public function go()
    {
        $url = $_SERVER['REQUEST_URI'];

        if (array_key_exists($url, $this->routes)) {
            $controllerName   = $this->routes[$url][0];
            $controllerMethod = $this->routes[$url][1];

            echo call_user_func([new $controllerName, $controllerMethod]);
        }
    }
}
