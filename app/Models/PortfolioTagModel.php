<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioTagModel extends Model
{
    protected $table = 'portfolio_tag';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_tag', 'portfolio_slug'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
