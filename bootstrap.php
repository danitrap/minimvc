<?php

use Mvc\Core\Container;

Container::bind('logger', Mvc\Core\FileLogger::getInstance());
// Container::bind('logger', Mvc\Core\VarDumpLogger::getInstance());
Container::bind('router', Mvc\Core\Router::class);
