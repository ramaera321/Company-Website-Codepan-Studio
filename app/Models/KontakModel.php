<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'kontak';
    protected $useTimestamps = true;
    protected $allowedFields = ['hari', 'jam', 'wa', 'facebook', 'telpon', 'email', 'instagram', 'linkedin'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
