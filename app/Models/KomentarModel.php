<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = 'komentar';
    protected $useTimestamps = true;
    protected $allowedFields = ['jabatan', 'perusahaan', 'komentar', 'id_admin'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
