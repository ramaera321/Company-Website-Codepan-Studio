<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'kategori', 'sub_kategori', 'materi', 'penulis', 'foto', 'bagian_dari'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
