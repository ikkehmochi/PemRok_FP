<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController{

public function index(){
    $berita_model = new BeritaModel();
    $all_berita = $berita_model->findAll();
    return view('berita', ['all_berita'=>$all_berita]);
}
public function add_berita(){
    return view('add_berita');
}

public function proses_add_berita(){
    $berita_model = new BeritaModel();
    $berita_model->insert($this->request->getPost());
    return redirect()->to(base_url('berita'));
}
public function edit_berita($id=false){
    $berita_model = new BeritaModel();
    $data_berita = $berita_model->find($id);
    return view('edit_berita', ['data_berita' => $data_berita]);
}
public function delete_berita($id=false){
    $berita_model = new BeritaModel();
    $berita_model->delete($id);
    return redirect()->to(base_url('berita'));
}
public function proses_edit_berita(){
    $berita_model = new BeritaModel();
    $berita_model->update($this->request->getPost('id'), $this->request->getPost());
    return redirect()->to(base_url('berita'));
}
}
