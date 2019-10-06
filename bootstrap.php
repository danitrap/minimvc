<?php

$app = new Mvc\Core\Container;

$app->bind('logger', Mvc\Core\Logger::getInstance());
$app->bind('router', new Mvc\Core\Router);
