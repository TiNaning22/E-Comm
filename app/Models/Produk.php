<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['NamaProduk', 'Kategori', 'HargaProduk', 'StokProduk', 'DeskripsiProduk', 'Gambar'];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
}
