<?php

namespace Mvc\Core;

use Exception;

class Container
{
    private static $container = [];

    public static function bind($alias, $item)
    {
        static::$container[$alias] = $item;
    }

    public static function resolve($alias)
    {
        if (array_key_exists($alias, static::$container)) {
            return static::$container[$alias];
        } else {
            throw new Exception("Nessun elemento all'alias {$alias}.");
        }
    }
}
