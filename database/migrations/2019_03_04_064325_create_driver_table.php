<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('driverID');
            $table->string('address');
            $table->string('trn');
            $table->string('vehicleMake');
            $table->string('vehicleModel');
            $table->integer('vehicleYear');
            $table->string('lisencePlate');
            $table->string('status');
            $table->timestamps();

            $table->foreign('driverID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver');
    }
}
