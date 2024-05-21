<?php

namespace App\Controllers;

use App\Models\UserModel;

class DST extends BaseController{

public function index(){
    $users_model= new UserModel();
    $all_DST= $users_model->where("supplier_type", "Tetap")->findAll();
    return view('DST', ['all_DST'=> $all_DST]);
}
public function remove_DST($id=false){
    $users_model= new UserModel();
    $data_user = $users_model->find($id);
    if($data_user){
    $data_user->supplier_type="TidakTetap";
    $users_model->update($id, $data_user);
    }
    return redirect()->to(base_url('DST'));
}
}
