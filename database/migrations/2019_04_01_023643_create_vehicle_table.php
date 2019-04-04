<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('driverID');
            $table->string('vehicleMake');
            $table->string('vehicleModel');
            $table->integer('vehicleYear');
            $table->string('lisencePlate');
            $table->timestamps();

            $table->foreign('driverID')->references('driverID')->on('driver');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
}
