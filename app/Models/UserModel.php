<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel    extends Model{
    protected $table='users';
    protected $pk = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['nama', 'email', 'nohp', 'role', 'supplier_type'];
}