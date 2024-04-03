<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_trips', function (Blueprint $table) {
            $table->id();
            $table->dateTime('trip_start')->comment('Начало поездки');
            $table->dateTime('trip_end')->comment('Окончание поездки');
            $table->integer('car_id')->comment('ID автомобиля');
            $table->foreign('car_id')->references('id')->on('cars');
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
        Schema::dropIfExists('working_trips');
    }
}
