<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Penerbit;

class PenerbitController extends BaseController
{
    public function index()
    {
        $penerbitModel = new Penerbit();
        $penerbit = $penerbitModel->findAll();
        $data = [
            'title' => 'penerbit',
            'penerbit' => $penerbit,            
        ];
        return view('penerbit/list', $data);
    }
    public function create(){
        $data = [
            'title' => 'Tambah Penerbit',         
        ];
        return view('penerbit/create', $data);
    }
    public function store(){
        if(!$this->validate([
            'nama_penerbit' => 'required|string',
        ])){
            return redirect()->to('/createPenerbit');
        }
        $penerbitModel = new Penerbit();
        $data = [
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ];
        $penerbitModel->save($data);
        return redirect()->to('/penerbit');
    }
    public function delete($kode_penerbit){
        $penerbitModel = new Penerbit();
        $penerbitModel->delete($kode_penerbit);
        
        return redirect()->to('/penerbit');
    }
    public function edit($kode_penerbit){
        $penerbitModel = new Penerbit();
        $penerbit = $penerbitModel->find($kode_penerbit);
        $data = [
            'title' => 'Edit Penerbit',
            'penerbit' => $penerbit,            
        ];
        return view('penerbit/edit', $data);
    }

    public function update($kode_penerbit){
        if(!$this->validate([
            'nama_penerbit' => 'required|string',
        ])){
            return redirect()->to('/editPenerbit/'.$kode_penerbit);
        }
        $penerbitModel = new Penerbit();
        $data = [
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ];
        $penerbitModel->update($kode_penerbit, $data);
        return redirect()->to('/penerbit');
    }
}
