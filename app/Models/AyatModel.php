<?php

namespace App\Models;

use CodeIgniter\Model;

class AyatModel extends Model
{
    protected $table = 'ayat';
    protected $useTimestamps = true;
    protected $allowedFields = ['pasal', 'judul_ayat', 'deskripsi'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
