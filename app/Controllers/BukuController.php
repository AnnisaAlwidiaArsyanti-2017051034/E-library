<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use App\Models\Kategori;

class BukuController extends BaseController
{
    public function index()
    {
        $bukuModel = new Buku();
        $buku = $bukuModel->findAll();
        $data = [
            'title' => 'buku',
            'buku' => $buku,            
        ];
        return view('buku/list', $data);
    }
    public function create(){        
        $kategoriModel = new Kategori();
        $kategori = $kategoriModel->findAll();
        $bukuModel = new Buku();
        $buku = $bukuModel->findAll();
        $data = [
            'title' => 'Tambah Buku',
            'kategori' => $kategori,
            'buku' => $buku,
        ];
        return view('buku/create', $data);
    }
    public function store(){
        if(!$this->validate([
            'judul_buku' => 'required|string',
            'kategori' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric',
            'halaman' => 'required|numeric',
            'jumlah_stok'  => 'required|numeric',
            'posisi_rak'  => 'required|string',
            'gambar'  => 'required|string',
        ])){
            return redirect()->to('/createBuku');
        }
        $bukuModel = new Buku();
        $data = [
            'judul_buku' => $this->request->getPost('judul_buku'),
            'kategori' => $this->request->getPost('kategori'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'halaman' => $this->request->getPost('halaman'),
            'jumlah_stok' => $this->request->getPost('jumlah_stok'),
            'posisi_rak' => $this->request->getPost('posisi_rak'),
            'gambar' => $this->request->getPost('gambar'),
        ];
        $bukuModel->save($data);
        return redirect()->to('/buku');
    }
    public function delete($kode){
        $bukuModel = new Buku();
        $bukuModel->delete($kode);
        
        return redirect()->to('/buku');
    }
    public function edit($kode){
        $kategoriModel = new Kategori();
        $kategori = $kategoriModel->findAll();
        $bukuModel = new Buku();
        $buku = $bukuModel->find($kode);
        $data = [
            'title' => 'Tambah Buku',
            'kategori' => $kategori,
            'buku' => $buku,
        ];
        return view('buku/edit', $data);
    }

    public function update($kode){
        if(!$this->validate([
            'judul_buku' => 'required|string',
            'kategori' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric',
            'halaman' => 'required|numeric',
            'jumlah_stok'  => 'required|numeric',
            'posisi_rak'  => 'required|string',
            'gambar'  => 'required|string',
        ])){
            return redirect()->to('/editBuku/'.$kode);
        }
        $bukuModel = new Buku();
        $data = [
            'judul_buku' => $this->request->getPost('judul_buku'),
            'kategori' => $this->request->getPost('kategori'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'halaman' => $this->request->getPost('halaman'),
            'jumlah_stok' => $this->request->getPost('jumlah_stok'),
            'posisi_rak' => $this->request->getPost('posisi_rak'),
            'gambar' => $this->request->getPost('gambar'),
        ];
        $bukuModel->update($kode, $data);
        return redirect()->to('/buku');
    }

}
