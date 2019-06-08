<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitioneventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitionevent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('competitionid');
            $table->bigInteger('eventtypeid');
            $table->date('date')->nullable();
            $table->timestamps();

            //$table->foreign('competitionid')->references('id')->on('competition');
            //$table->foreign('eventtypeid')->references('id')->on('eventtype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitionevent');
    }
}
