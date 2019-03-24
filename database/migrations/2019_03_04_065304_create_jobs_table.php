<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->string('customerEmail');
            $table->unsignedInteger('driverID');
            $table->string('pickUpLocation');
            $table->string('dropOffLocation');
            $table->float('distance');
            $table->unsignedInteger('cost');
            $table->string('pickUp');
            $table->string('dropOff');
            $table->timestamps();

            $table->foreign('customerEmail')->references('email')->on('customer');
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
        Schema::dropIfExists('jobs');
    }
}
