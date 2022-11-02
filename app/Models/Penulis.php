<?php

namespace App\Models;

use CodeIgniter\Model;

class Penulis extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'penulis';
    protected $primaryKey       = 'kode_penulis';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $allowedFields    = ['nama_penulis'];
}
