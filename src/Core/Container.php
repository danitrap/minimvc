<?php

namespace Mvc\Core;

class Container
{
    private static $container = [];

    public static function bind($alias, $concretion)
    {
        static::$container[$alias] = $concretion;
    }

    public static function resolve($alias)
    {
        if (array_key_exists($alias, static::$container)) {
            return static::$container[$alias];
        }
    }
}
