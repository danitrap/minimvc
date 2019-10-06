<?php

namespace Mvc\App\Controllers;

use Mvc\App\Models\Todo;

class HomeController
{
    public function index()
    {
        $todos = Todo::all();

        return require 'views/home/index.view.php';
    }
}
