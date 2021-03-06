<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'category', 'subcategory', 'description', 'price', 'image'];

    //protected $useSoftDeletes = true;

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //as model from controller Menu
    public function getMenu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        // query builder class
        $builder = $this->table('menu');
        $builder->like('name', $keyword);
        return $builder;
        // return $this->table('menu')->like('name', $keyword);
    }
}
