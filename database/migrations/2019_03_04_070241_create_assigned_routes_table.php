<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('driverID');
            $table->string('routes');
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
        Schema::dropIfExists('assigned_routes');
    }
}
