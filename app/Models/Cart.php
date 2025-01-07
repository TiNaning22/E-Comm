<?php
namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id']; // Hanya menyimpan user_id

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'cart_product')->withPivot('quantity');
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
