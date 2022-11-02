<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penulis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_penulis' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('kode_penulis', true);
        $this->forge->createTable('penulis');
    }

    public function down()
    {
        $this->forge->dropTable('penulis');  
    }
}
