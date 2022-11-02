<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penerbit extends Seeder
{
    public function run()
    {
        $data_penerbit = [
            [
                'nama_penerbit' => 'Kompas',
            ],
            [
                'nama_penerbit' => 'Mizan',
            ],
            [
                'nama_penerbit' => 'Gramedia Pustaka Utama',
            ],
            [
                'nama_penerbit' => 'Informatika',
            ],
        ];

        foreach($data_penerbit as $data){
            $this->db->table('penerbit')->insert($data);
        }
    }
}
