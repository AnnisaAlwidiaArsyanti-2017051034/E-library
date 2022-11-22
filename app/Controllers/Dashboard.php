<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;

class Dashboard extends BaseController
{
    public function index()
    {
        $bukuModel = new Buku();
        $kategoriModel = new Kategori();
        $penulisModel = new Penulis();
        $penerbitModel = new Penerbit();
        $buku = $bukuModel->select('COUNT(kode_buku) as total')->get()->getResultArray();
        $kategori = $kategoriModel->select('COUNT(kode_kategori) as total')->get()->getResultArray();
        $penulis = $penulisModel->select('COUNT(kode_penulis) as total')->get()->getResultArray();
        $penerbit = $penerbitModel->select('COUNT(kode_penerbit) as total')->get()->getResultArray();
        $data = [
            'title' => 'Dashboard',
            'buku' => $buku,
            'kategori' => $kategori,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
        ];
        return view('dashboard/dashboard', $data);
    }
}
