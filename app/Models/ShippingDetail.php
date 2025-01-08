<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingDetail extends Model
{
    
    protected $fillable = ['order_number', 'tracking_number', 'status', 'shipping_address'];
}
