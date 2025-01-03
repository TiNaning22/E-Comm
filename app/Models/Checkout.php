<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = ['nama', 'email', 'alamat', 'payment_method'];
}