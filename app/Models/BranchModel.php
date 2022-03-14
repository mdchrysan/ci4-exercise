<?php

namespace App\Models;

use CodeIgniter\Model;

class BranchModel extends Model
{
    protected $table      = 'location';
    protected $primaryKey = 'id';
    protected $allowedFields = ['branch_name', 'address', 'city'];
    protected $useTimestamps = true;

    public function search($keyword)
    {
        // query builder class
        $builder = $this->table('menu');
        $builder->like('branch_name', $keyword);
        return $builder;
        // return $this->table('menu')->like('branch_name', $keyword)->orLike('city', $keyword);
    }
}
