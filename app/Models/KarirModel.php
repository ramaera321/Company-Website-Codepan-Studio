<?php

namespace App\Models;

use CodeIgniter\Model;

class KarirModel extends Model
{
    protected $table = 'karir';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_karir', 'lokasi', 'deskripsi', 'keterangan'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
