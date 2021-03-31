<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioSubKategoriModel extends Model
{
    protected $table = 'portfolio_sub_kategori';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_sub'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
