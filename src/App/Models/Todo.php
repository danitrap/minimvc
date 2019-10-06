<?php

namespace Mvc\App\Models;

class Todo
{
    protected $todos = [
        'Vai al supermercato',
        'Compra il latte',
        'Torna a casa',
    ];

    public static function all()
    {
        $instance = new self;

        return $instance->todos;
    }
}
