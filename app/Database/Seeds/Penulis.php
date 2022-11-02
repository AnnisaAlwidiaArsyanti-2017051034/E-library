<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penulis extends Seeder
{
    public function run()
    {
        $data_penulis = [
            [
                'nama_penulis' => 'Reni Suwenti, M.M',
            ],
            [
                'nama_penulis' => 'Hendi Hendratman',
            ],
            [
                'nama_penulis' => 'Veronica Roth',
            ],
        ];

        foreach($data_penulis as $data){
            $this->db->table('penulis')->insert($data);
        }
    }
}
