<?php

namespace Mvc\Core\Contracts;

interface LoggerInterface
{
    public static function getInstance();

    public function info($message);

    public function error($message);

    public function debug($message);
}
