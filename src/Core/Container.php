<?php

namespace Mvc\Core;

class Container
{
    private $container = [];

    public function bind($alias, $concretion)
    {
        $this->container[$alias] = $concretion;
    }

    public function resolve($alias)
    {
        return $this->container[$alias];
    }
}
