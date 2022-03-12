<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'branch_name'   => 'Warmindo Pak Eko',
                'address'       => 'Kenangan Street No.28',
                'city'          => 'Yogyakarta',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'branch_name'   => 'Warmindo Abang Adek',
                'address'       => 'Kemerdekaan Street No.17',
                'city'          => 'Jakarta',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO location (branch_name, address, city, created_at, updated_at) VALUES(:branch_name:, :address:, :city:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // insert data only works for one data
        // $this->db->table('location')->insert($data);
        // insertBatch works for array
        $this->db->table('location')->insertBatch($data);
    }
}
