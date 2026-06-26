<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'penulis',
        'tanggal_publikasi',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_publikasi' => 'date',
        ];
    }

    public function getGambarUrlAttribute()
    {
        return $this->gambar ? Storage::disk('public')->url($this->gambar) : null;
    }
}
