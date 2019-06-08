<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingeventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingevent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('eventtypeid');
            $table->bigInteger('swimmerid');
            $table->date('date')->nullable();
            $table->integer('time')->nullable();
            $table->timestamps();

            //$table->foreign('eventtypeid')->references('id')->on('eventtype');
            //$table->foreign('swimmerid')->references('swimmerid')->on('swimmer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainingevent');
    }
}
