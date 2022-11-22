<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'buku';
    protected $primaryKey       = 'kode_buku';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $allowedFields    = ['judul_buku', 'kategori', 'penulis', 'penerbit', 'tahun_terbit', 'halaman', 'jumlah_stok', 'posisi_rak', 'gambar'];

    public function getData()
    {             
        $query =  $this->db->table('buku')
         ->join('kategori', 'buku.kategori = kategori.kode_kategori') 
         ->join('penulis', 'buku.penulis = penulis.kode_penulis')
         ->join('penerbit', 'buku.penerbit = penerbit.kode_penerbit')
         ->get();  
        return $query;
    }
}
