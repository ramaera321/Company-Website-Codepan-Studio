<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolio';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'kategori', 'sub_kategori', 'tentang_mitra', 'tantangan', 'solusi', 'hasil', 'penulis', 'foto', 'bagian_dari'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
