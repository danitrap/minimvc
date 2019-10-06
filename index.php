<?php

require __DIR__ . '/vendor/autoload.php';

$logger = Mvc\Core\Logger::getInstance();

$logger->info('test');
$logger->debug('test');
$logger->error('test');
