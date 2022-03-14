<?php

namespace App\Controllers;

use App\Models\BranchModel;

class Branch extends BaseController
{
    // use property
    protected $branchModel;

    //makes the model's called alongside with its class, so all the method can use it
    public function __construct()
    {
        $this->branchModel = new BranchModel();
    }

    public function index()
    {
        $branch = $this->branchModel->getBranch();

        // d($this->request->getVar('keyword'));
        // $keyword = $this->request->getVar('keyword');
        // if ($keyword) {
        //     $this->branchModel->search($keyword);
        // } else {
        //     $branch;
        // }

        $data = [
            'title' => 'Location | MyExercise',
            'branch' => $this->branchModel->findAll()
        ];

        return view('pages/location', $data);
    }
}
