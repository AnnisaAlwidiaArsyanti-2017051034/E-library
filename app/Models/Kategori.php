<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategori';
    protected $primaryKey       = 'kode_kategori';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $allowedFields    = ['nama_kategori'];
}
