<?php

namespace Mvc\Core;

use Mvc\Core\Contracts\LoggerInterface;

class VarDumpLogger implements LoggerInterface
{
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function info($message)
    {
        var_dump($message);
    }

    public function debug($message)
    {
        var_dump($message);
    }

    public function error($message)
    {
        var_dump($message);
    }

}
