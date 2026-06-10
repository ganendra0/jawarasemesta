<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'link_demo',
        'link_github',
        'teknologi',
    ];
}
