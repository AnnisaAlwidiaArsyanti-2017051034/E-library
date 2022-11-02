<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
    public function run()
    {
        $data_buku = [
            [
                'judul_buku' => 'The Magic of Adobe Photoshop Edisi Revisi 2',
                'kategori' => '1',
                'penulis' => '2',
                'penerbit' => '4',
                'tahun_terbit' => '2017',
                'halaman' => '752',
                'jumlah_stok' => '11',
                'posisi_rak' => 'R003',
                'gambar' => '-',
            ],
        ];

        foreach($data_buku as $data){
            $this->db->table('buku')->insert($data);
        }
    }
}
