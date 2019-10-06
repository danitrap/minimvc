<?php

namespace Mvc\Core;

use Mvc\Core\Container;

class Router
{
    private $routes;

    public static function load($routes)
    {
        $self = new static;

        $self->routes = $routes;

        return $self;
    }

    public function go($url)
    {
        Container::resolve('logger')->info($url);

        if (array_key_exists($url, $this->routes)) {
            $controllerName   = $this->routes[$url][0];
            $controllerMethod = $this->routes[$url][1];

            echo call_user_func([new $controllerName, $controllerMethod]);
        }
    }
}
