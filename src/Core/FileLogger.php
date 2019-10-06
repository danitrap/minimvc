<?php

namespace Mvc\Core;

use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;
use Mvc\Core\Contracts\LoggerInterface;

class FileLogger implements LoggerInterface
{
    private static $instance = null;

    private $logger;

    private function __construct()
    {
        $this->logger = new MonologLogger('logger');
        $this->logger->pushHandler(new StreamHandler('app.log', MonologLogger::DEBUG));
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
        $this->logger->info($message);
    }

    public function debug($message)
    {
        $this->logger->debug($message);
    }

    public function error($message)
    {
        $this->logger->error($message);
    }

}
