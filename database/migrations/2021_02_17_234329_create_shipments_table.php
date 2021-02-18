<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->dateTime('shipment_date', $precision = 0);
            $table->string('instructions');
            $table->string('container_number');
            $table->string('chasis_number');
            $table->string('vehicle_plate');
            $table->string('vehicle_size');
            $table->string('vehicle_axle');
            $table->string('shipment_state');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
