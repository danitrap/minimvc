<?php

use Mvc\Core\Container;

Container::bind('logger', Mvc\Core\Logger::getInstance());
Container::bind('router', Mvc\Core\Router::class);
