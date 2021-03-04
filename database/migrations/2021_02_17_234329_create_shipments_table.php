<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration{

    public function up(){
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->foreignId('driver_id')->references('id')->on('drivers');
            $table->dateTime('shipment_date', $precision = 0);
            $table->string('instructions');
            $table->string('container_number');
            $table->string('chasis_number');
            $table->string('vehicle_plate');
            $table->unsignedTinyInteger('shipment_state')->length(1)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down(){
        Schema::dropIfExists('shipments');
    }
    
}
