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
            $table->unsignedInteger('customerID')->unique();
            $table->unsignedInteger('driverID')->unique();
            $table->string('pickUpLocation');
            $table->string('dropOffLocation');
            $table->unsignedInteger('cost');
            $table->string('status');
            $table->timestamps();

            $table->foreign('customerID')->references('customerID')->on('customer');
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
