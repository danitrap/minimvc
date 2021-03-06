<?php

namespace Mvc\Core;

use Mvc\Core\Container;

class Router
{
    protected $routes = [];

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
            return $this->invoke(...$this->routes[$url]);
        } else {
            header('404 Not Found', true, 404);
            return null;
        }
    }

    protected function invoke($controller, $method)
    {
        return call_user_func([new $controller, $method]);
    }
}
