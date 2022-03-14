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

    public function location()
    {
        $data = [
            'title' => 'Location | MyExercise',
            // 'address' => [
            //     [
            //         'type' => 'Warmindo Abang Adek',
            //         'address' => 'Kemerdekaan Street No. 12',
            //         'city' => 'Jakarta'
            //     ],
            //     [
            //         'type' => 'Warmindo Pak Kumis',
            //         'address' => 'Kenangan Street No. 17',
            //         'city' => 'Yogyakarta'
            //     ],
            // ]
        ];
        return view('pages/location', $data);
    }
}
