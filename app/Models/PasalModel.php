<?php

namespace App\Models;

use CodeIgniter\Model;

class PasalModel extends Model
{
    protected $table = 'pasal';
    protected $useTimestamps = true;
    protected $allowedFields = ['pasal', 'judul'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
