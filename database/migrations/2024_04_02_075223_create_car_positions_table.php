<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_positions', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id')->comment('ID автомобиля');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->integer('position_id')->comment('ID должности');
            $table->foreign('position_id')->references('id')->on('positions');
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
        Schema::dropIfExists('car_positions');
    }
}
