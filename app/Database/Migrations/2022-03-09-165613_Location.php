<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Location extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'          => 'INT',
                'constraint'    => 10,
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'branch_name'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'address'           => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'city'              => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'created_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'updated_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('location');
    }

    public function down()
    {
        $this->forge->dropTable('location');
    }
}
