<?php

namespace App\Models;

use CodeIgniter\Model;

class CaptchaModel extends Model
{
    protected $table = 'captcha';
    protected $useTimestamps = true;
    protected $allowedFields = ['deskripsi', 'foto'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
