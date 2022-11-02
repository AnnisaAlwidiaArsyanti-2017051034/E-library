<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Penulis;

class PenulisController extends BaseController
{
    public function index()
    {
        $penulisModel = new Penulis();
        $penulis = $penulisModel->findAll();
        $data = [
            'title' => 'penulis',
            'penulis' => $penulis,            
        ];
        return view('penulis/list', $data);
    }
    public function create(){
        $data = [
            'title' => 'Tambah Penulis',         
        ];
        return view('penulis/create', $data);
    }
    public function store(){
        if(!$this->validate([
            'nama_penulis' => 'required|string',
        ])){
            return redirect()->to('/createPenulis');
        }
        $penulisModel = new Penulis();
        $data = [
            'nama_penulis' => $this->request->getPost('nama_penulis'),
        ];
        $penulisModel->save($data);
        return redirect()->to('/penulis');
    }
    public function delete($kode_penulis){
        $penulisModel = new Penulis();
        $penulisModel->delete($kode_penulis);
        
        return redirect()->to('/penulis');
    }
    public function edit($kode_penulis){
        $penulisModel = new Penulis();
        $penulis = $penulisModel->find($kode_penulis);
        $data = [
            'title' => 'Edit Penulis',
            'penulis' => $penulis,            
        ];
        return view('penulis/edit', $data);
    }

    public function update($kode_penulis){
        if(!$this->validate([
            'nama_penulis' => 'required|string',
        ])){
            return redirect()->to('/editPenulis/'.$kode_penulis);
        }
        $penulisModel = new Penulis();
        $data = [
            'nama_penulis' => $this->request->getPost('nama_penulis'),
        ];
        $penulisModel->update($kode_penulis, $data);
        return redirect()->to('/penulis');
    }
}
