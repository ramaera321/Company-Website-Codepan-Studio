<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'no', 'nama_perusahaan', 'layanan_it', 'jumlah_orang', 'bidang_perusahaan'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
