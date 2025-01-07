<?php
namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = ['id'];

    public function cart()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')->withPivot('quantity');
    }
    public function kategori()
{
    return $this->belongsTo(Kategori::class, 'Kategori', 'id');
}
}
