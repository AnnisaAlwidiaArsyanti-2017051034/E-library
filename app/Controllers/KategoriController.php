<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kategori;

class KategoriController extends BaseController
{
    public function index()
    {
        $kategoriModel = new Kategori();
        $kategori = $kategoriModel->findAll();
        $data = [
            'title' => 'kategori',
            'kategori' => $kategori,            
        ];
        return view('kategori/list', $data);
    }
    public function create(){
        $data = [
            'title' => 'Tambah Kategori',         
        ];
        return view('kategori/create', $data);
    }
    public function store(){
        if(!$this->validate([
            'nama_kategori' => 'required|string',
        ])){
            return redirect()->to('/createKategori');
        }
        $kategoriModel = new Kategori();
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];
        $kategoriModel->save($data);
        return redirect()->to('/kategori');
    }
    public function delete($kode_kategori){
        $kategoriModel = new Kategori();
        $kategoriModel->delete($kode_kategori);
        
        return redirect()->to('/kategori');
    }
    public function edit($kode_kategori){
        $kategoriModel = new Kategori();
        $kategori = $kategoriModel->find($kode_kategori);
        $data = [
            'title' => 'Edit Kategori',
            'kategori' => $kategori,            
        ];
        return view('kategori/edit', $data);
    }

    public function update($kode_kategori){
        if(!$this->validate([
            'nama_kategori' => 'required|string',
        ])){
            return redirect()->to('/editKategori/'.$kode_kategori);
        }
        $kategoriModel = new Kategori();
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];
        $kategoriModel->update($kode_kategori, $data);
        return redirect()->to('/kategori');
    }
}
