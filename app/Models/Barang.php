<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'images',
        'deskripsi',
        'stok',
        'harga'
    ];

    protected function casts(): array
    {
        return [
            'images' => 'array',
            'harga' => 'decimal:2',
            'stok' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Barang $barang) {
            $barang->harga = $barang->harga ?? 0;
            $barang->stok = $barang->stok ?? 0;
        });
    }

    public function getFirstImageUrlAttribute()
    {
        if ($this->images && is_array($this->images) && count($this->images) > 0) {
            return Storage::disk('public')->url($this->images[0]);
        }
        return null;
    }

    public function getImageUrlsAttribute()
    {
        if ($this->images && is_array($this->images)) {
            return collect($this->images)->map(function ($image) {
                return Storage::disk('public')->url($image);
            })->toArray();
        }
        return [];
    }
}
