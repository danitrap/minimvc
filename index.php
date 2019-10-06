<?php

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/bootstrap.php';

$app->resolve('router')->load(require __DIR__ . '/routes.php')->go();
