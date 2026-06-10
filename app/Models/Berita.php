<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'penulis',
        'tanggal_publikasi'
    ];
}
