<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun_terbit' => [
                'type' => 'INT',
                'constraint' => 4,
            ],
            'halaman' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'jumlah_stok' => [
                'type' => 'INT',
                'constraint' => 4,
            ],
            'posisi_rak' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('kode', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');  
    }
}
