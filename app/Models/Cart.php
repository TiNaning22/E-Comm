<?php
namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'cart_product')->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
