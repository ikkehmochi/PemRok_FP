<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel    extends Model{
    protected $table='berita';
    protected $pk = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['Judul', 'Tanggal', 'Gambar','artikel'];
}