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
            $table->unsignedInteger('driverID')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->string('vehicleMake');
            $table->string('vehicleModel');
            $table->integer('vehicleYear');
            $table->string('lisencePlate');
            $table->string('status');
            $table->timestamps();
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
