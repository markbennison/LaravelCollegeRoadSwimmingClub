<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaneassignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laneassignment', function (Blueprint $table) {
            $table->bigInteger('eventid');
            $table->integer('heatnumber');
            $table->integer('lanenumber');
            $table->bigInteger('swimmerid');
            $table->integer('time')->nullable();
            $table->string('status')->nullable();
            $table->integer('place')->nullable();
            $table->timestamps();

            $table->primary(['eventid', 'heatnumber', 'lanenumber']);
            //$table->foreign('eventid')->references('id')->on('competitionevent');
            //$table->foreign('swimmerid')->references('id')->on('swimmer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laneassignment');
    }
}
