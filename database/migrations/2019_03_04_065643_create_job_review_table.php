<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_review', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->unsignedInteger('jobID');
            $table->unsignedInteger('customerID')->unique();
            $table->unsignedInteger('driverID')->unique();
            $table->unsignedInteger('rating');
            $table->string('comment');
            $table->timestamps();

            $table->foreign('jobID')->references('id')->on('jobs');
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
        Schema::dropIfExists('job_review');
    }
}
