<?php

namespace App\Models;

use CodeIgniter\Model;

class Penerbit extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'penerbit';
    protected $primaryKey       = 'kode_penerbit';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $allowedFields    = ['nama_penerbit'];
}
