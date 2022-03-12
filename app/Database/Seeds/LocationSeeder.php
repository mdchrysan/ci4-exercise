<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'branch_name'   => 'Warmindo Pak Eko',
            'address'       => 'Kemerdekaan Street No.7',
            'city'          => 'Jakarta'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO location (branch_name, address, city) VALUES(:branch_name:, :address:, :city:)", $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
