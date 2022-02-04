<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu | MyExercise'
        ];
        return view('menu/index', $data);
    }
}
