<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'buku';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $allowedFields    = ['judul_buku', 'kategori', 'penulis', 'penerbit', 'tahun_terbit', 'halaman', 'jumlah_stok', 'posisi_rak', 'gambar'];
}
