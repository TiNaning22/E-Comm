<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shipping_details', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('order_number');  // Nomor pesanan (order_number)
            $table->string('tracking_number')->unique();  // Nomor tracking pengiriman (tracking_number)
            $table->string('status');  // Status pengiriman (status)
            $table->string('shipping_address');  // Alamat pengiriman (shipping_address)
            $table->timestamps();  // Kolom untuk tanggal dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('shipping_details');
    }
};
