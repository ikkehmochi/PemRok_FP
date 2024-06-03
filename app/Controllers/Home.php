<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\UserModel;


class Home extends BaseController
{
    public function index(): string
    {
        $berita_model = new BeritaModel();
        $all_berita = $berita_model->findAll();
        return view('home', ['all_berita'=>$all_berita]);
    }

    public function tentang(): string
    {
        return view('tentang.php');
    }
    public function users(): string
    {
        return view('users.php');
    }
    public function DST(): string
    {
        return view('DST.php');
    }
    public function spesifikasi(): string
    {
        return view('spesifikasi.php');
    }
    public function login(): string
    {
        return view('auth/login');
    }
    public function register(): string
    {
        return view('auth/register');
    }
}
