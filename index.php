<?php

use Mvc\Core\Container;

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/bootstrap.php';

$router = Container::resolve('router');

$router::load(require __DIR__ . '/routes.php')->go($_SERVER['REQUEST_URI']);
