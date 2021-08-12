<?php

namespace App\Models;

use CodeIgniter\Model;

class JenjangKarirModel extends Model
{
    protected $table = 'jenjang_karir';
    protected $useTimestamps = true;
    protected $allowedFields = ['karir'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
