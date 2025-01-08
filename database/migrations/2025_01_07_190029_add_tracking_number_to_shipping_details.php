<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrackingNumberToShippingDetails extends Migration
{
    public function up()
{
    if (!Schema::hasColumn('shipping_details', 'tracking_number')) {
        Schema::table('shipping_details', function (Blueprint $table) {
            $table->string('tracking_number')->nullable(false);
        });
    }
}


    public function down()
    {
        Schema::table('shipping_details', function (Blueprint $table) {
            $table->dropColumn('tracking_number');
        });
    }
}
