<?php

namespace App\Models;

use CodeIgniter\Model;

class AnakModel extends Model
{
    protected $table = 'anak';
    protected $primaryKey = 'id_anak';
    protected $allowedFields = ['nama_anak', 'usia_anak', 'id_orangtua'];
}
