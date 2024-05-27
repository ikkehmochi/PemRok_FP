<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController{

public function index(){
    $users_model= new UserModel();
    $all_users= $users_model->findAll();
    return view('users', ['all_users'=> $all_users]);
}
public function add_user(){
    return view('add_user');
}

public function proses_add_user(){
    $users_model= new UserModel();
    $users_model->insert($this->request->getPost());
    return redirect()->to(base_url('users'));
}
public function edit_user($id=false){
    $users_model= new UserModel();
    $data_user = $users_model->find($id);
    return view('edit_user', ['data_user' => $data_user]);
}
public function delete_user($id=false){
    $users_model= new UserModel();
    $users_model->delete($id);
    return redirect()->to(base_url('users'));
}
public function proses_edit_user(){
    $users_model= new UserModel();
    $users_model->update($this->request->getPost('id'), $this->request->getPost());
    return redirect()->to(base_url('users'));
}
}
