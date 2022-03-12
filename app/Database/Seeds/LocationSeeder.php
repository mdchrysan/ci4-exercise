<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'branch_name'   => 'Warmindo Pak Eko',
        //         'address'       => 'Jl. Kenangan No.28',
        //         'city'          => 'Yogyakarta',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'branch_name'   => 'Warmindo Abang Adek',
        //         'address'       => 'Jl. Kemerdekaan No.17',
        //         'city'          => 'Jakarta',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ]
        // ];

        // Using Simple Queries
        // $this->db->query("INSERT INTO location (branch_name, address, city, created_at, updated_at) VALUES(:branch_name:, :address:, :city:, :created_at:, :updated_at:)", $data);

        // Using Query Builder insertBatch -> works for array
        // $this->db->table('location')->insertBatch($data);

        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'branch_name'   => 'Warmindo' . ' ' . $faker->firstName . ' ' . $faker->lastName,
                'address'       => $faker->streetAddress,
                'city'          => $faker->city,
                'created_at'    => $faker->dateTime()->format('Y-m-d H:i:s'),
                'updated_at'    => Time::now()
            ];

            // Using Query Builder insert -> only works for one group of data
            $this->db->table('location')->insert($data);
        }
    }
}
