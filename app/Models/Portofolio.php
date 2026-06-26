<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function getGambarUrlAttribute()
    {
        return $this->gambar ? Storage::disk('public')->url($this->gambar) : null;
    }

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class);
    }
}
