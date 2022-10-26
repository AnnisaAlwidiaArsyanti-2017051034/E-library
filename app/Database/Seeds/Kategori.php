<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kategori extends Seeder
{
    public function run()
    {
        $data_kategori = [
            [
                'nama_kategori' => 'Komputer',
            ],
            [
                'nama_kategori' => 'Bisnis',
            ],
            [
                'nama_kategori' => 'Pendidikan',
            ],
            [
                'nama_kategori' => 'Novel',
            ],
        ];

        foreach($data_kategori as $data){
            $this->db->table('kategori')->insert($data);
        }
    }
}
