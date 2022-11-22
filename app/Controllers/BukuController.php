<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;

class BukuController extends BaseController
{
    protected $modelsimpanan;
    public function __construct()
    {
        $this->bukuModel = new Buku();
    }
    public function index()
    {
        $buku = $this->bukuModel->getData()->getResult();
        $data = array(
            'title' => 'Buku',
            'buku' => $buku,
            // 'query' => $query,
        );
        return view('buku/list', $data);
    }
    public function create(){        
        $kategoriModel = new Kategori();
        $kategori = $kategoriModel->findAll();
        $penulisModel = new Penulis();
        $penulis = $penulisModel->findAll();
        $penerbitModel = new Penerbit();
        $penerbit = $penerbitModel->findAll();
        $bukuModel = new Buku();
        $buku = $bukuModel->findAll();
        $data = [
            'title' => 'Tambah Buku',
            'kategori' => $kategori,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'buku' => $buku,
        ];
        return view('buku/create', $data);
    }

    public function store(){
        if(!$this->validate([
            'judul_buku' => 'required|string',
            'kategori' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'halaman' => 'required|numeric',
            'jumlah_stok'  => 'required|numeric',
            'posisi_rak'  => 'required|string',
            'gambar'  => [
                'label' => 'Gambar',
                'rules' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar, 1024]'
            ],
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
        ];
        $gambar = $this->request->getFile('gambar');
        $gambar->move('uploads');
        $bukuModel->save($data);
        return redirect()->to('/buku');
    }
    public function delete($kode_buku){
        $bukuModel = new Buku();
        $bukuModel->delete($kode_buku);
        
        return redirect()->to('/buku');
    }
    public function edit($kode_buku){
        $kategoriModel = new Kategori();
        $kategori = $kategoriModel->findAll();        
        $penulisModel = new Penulis();
        $penulis = $penulisModel->findAll();
        $penerbitModel = new Penerbit();
        $penerbit = $penerbitModel->findAll();
        $bukuModel = new Buku();
        $buku = $bukuModel->find($kode_buku);
        $data = [
            'title' => 'Tambah Buku',
            'kategori' => $kategori,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'buku' => $buku,
        ];
        return view('buku/edit', $data);
    }

    public function update($kode_buku){
        if(!$this->validate([
            'judul_buku' => 'required|string',
            'kategori' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'halaman' => 'required|numeric',
            'jumlah_stok'  => 'required|numeric',
            'posisi_rak'  => 'required|string',
            'gambar'  => 'required',
        ])){
            return redirect()->to('/editBuku/'.$kode_buku);
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
            'gambar' => $this->request->getFile('gambar'),
        ];
        $bukuModel->update($kode_buku, $data);
        return redirect()->to('/buku');
    }

}
