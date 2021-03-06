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
        $page = $this->request->getVar('page_menu');
        $currentPage = $page ? $page : 1;
        //$menuModel = new \App\Models\MenuModel();
        //$menuModel = new MenuModel();

        //$menu = $this->menuModel->findAll();
        //dd($menu);
        //update this part to use model
        $menu = $this->menuModel->getMenu();

        // d($this->request->getVar('keyword'));
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->menuModel->search($keyword);
        } else {
            $menu;
        }

        $data = [
            'title' => 'Menu | MyExercise',
            // 'menu' => $menu
            'menu' => $this->menuModel->paginate(5, 'menu'),
            'pager' => $this->menuModel->pager,
            'currentPage' => $currentPage
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
            'name' => [
                'rules' => 'required|is_unique[menu.name]',
                'errors' => [
                    'required' => 'Menu {field} cannot be empty.',
                    'is_unique' => 'This {field} has already been taken.'
                ]
            ],
            'price' => [
                'rules' => 'greater_than_equal_to[1000]',
                'error' => '{field} should be in thousand rupiah.'
            ]
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

    public function delete($id)
    {
        $this->menuModel->delete($id);
        session()->setFlashdata('msg', 'Menu Deleted');
        return redirect()->to('/menu');
    }

    public function update($slug)
    {
        $data = [
            'title' => 'Update Menu | MyExercise',
            'validation' => \Config\Services::validation(),
            'menu' => $this->menuModel->getMenu($slug)
        ];
        return view('menu/update', $data);
    }

    public function saveUpdate($id)
    {
        dd($this->request->getVar());
        // ci new tech:
        // submit w/o id = insert, submit w/ id = update

        $oldMenu = $this->menuModel->getMenu($this->request->getVar('slug'));
        $newMenu = $this->request->getVar('name');
        if ($oldMenu['name'] == $newMenu) {
            $nameRule = 'required';
        } else {
            $nameRule = 'required|is_unique[menu.name]';
        }

        if (!$this->validate([
            'name' => [
                'rules' => $nameRule,
                'errors' => [
                    'required' => 'Menu {field} cannot be empty.',
                    'is_unique' => 'This {field} has already been taken.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/menu/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('menuName'), '-', true);

        $this->menuModel->save([
            'id' => $id,
            'name' => $this->request->getVar('menuName'),
            'slug' => $slug,
            'category' => $this->request->getVar('category'),
            'subcategory' => $this->request->getVar('subcategory'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'image' => $this->request->getVar('image')
        ]);

        session()->setFlashdata('msg', 'Menu Updated');

        return redirect()->to('/menu');
    }
}
