<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | MyExercise'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | MyExercise'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | MyExercise',
            'address' => [
                [
                    'type' => 'Home',
                    'address' => 'Kenangan Street No. 12',
                    'city' => 'Bogor'
                ],
                [
                    'type' => 'Office',
                    'address' => 'Kemerdekaan Street No. 17',
                    'city' => 'Jakarta'
                ],
            ]
        ];
        return view('pages/contact', $data);
    }
}
