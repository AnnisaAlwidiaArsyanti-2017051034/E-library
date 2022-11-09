<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_buku' => [
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
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'penulis' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'penerbit' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
        $this->forge->addKey('kode_buku', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');  
    }
}
