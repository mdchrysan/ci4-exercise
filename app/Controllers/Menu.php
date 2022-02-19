<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    // use property
    protected $menuModel;

    //makes the model's called alongside with its class, so all the method can use it
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        //$menuModel = new \App\Models\MenuModel();
        //$menuModel = new MenuModel();

        //$menu = $this->menuModel->findAll();
        //dd($menu);
        //update this part to use model
        $menu = $this->menuModel->getMenu();

        $data = [
            'title' => 'Menu | MyExercise',
            'menu' => $menu
        ];
        return view('menu/index', $data);
    }

    public function details($slug)
    {
        //echo $slug;
        //$menu = $this->menuModel->where(['slug' => $slug])->first();
        //update this part to use model
        // $menu = $this->menuModel->getMenu($slug);
        // dd($menu);

        $data = [
            'title' => 'Details | MyExercise',
            'menu' => $this->menuModel->getMenu($slug)
        ];

        // handling menu not in table
        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Menu ' . $slug . ' is not found.');
        }

        return view('menu/details', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Menu Form | MyExercise'
        ];
        return view('menu/create', $data);
    }

    public function saveMenu()
    {
        dd($this->request->getVar());
    }
}
