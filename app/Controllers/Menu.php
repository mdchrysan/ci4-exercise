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
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Menu "' . $slug . '" is not found.');
        }

        return view('menu/details', $data);
    }

    public function create()
    {
        // session();   // moved to BaseController
        $data = [
            'title' => 'Add Menu Form | MyExercise',
            'validation' => \Config\Services::validation()
        ];
        return view('menu/create', $data);
    }

    public function saveMenu()
    {
        //input validaton
        if (!$this->validate([
            'name' => 'required|is_unique[menu.name]',
            'price' => 'greater_than_equal_to[1000]'
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            // $data['validation'] = $validation;
            // return view('/menu/create', $data);
            return redirect()->to('/menu/create')->withInput()->with('validation', $validation);
            // and then go to method create
        }

        //create human-friendly URL string
        $slug = url_title($this->request->getVar('menuName'), '-', true);

        dd($this->request->getVar(['price', 'category']));
        // save to db
        // $this->menuModel->save([
        //     'name' => $this->request->getVar('menuName'),
        //     'slug' => $slug,
        //     'category' => $this->request->getVar('category'),
        //     'subcategory' => $this->request->getVar('subcategory'),
        //     'description' => $this->request->getVar('description'),
        //     'price' => $this->request->getVar('price'),
        //     'image' => $this->request->getVar('image')
        // ]);

        // session()->setFlashdata('msg', 'Menu Created');

        // return redirect()->to('/menu');
    }
}
