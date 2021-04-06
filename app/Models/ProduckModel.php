<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduckModel extends Model
{
    protected $table = 'produck';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'deskripsi_singkat', 'isi', 'penulis', 'foto',];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
