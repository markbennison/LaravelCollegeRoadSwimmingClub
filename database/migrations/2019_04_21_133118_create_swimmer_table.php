<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwimmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimmer', function (Blueprint $table) {
            $table->bigInteger('swimmerid');
            $table->bigInteger('coachid');
            $table->timestamps();

            $table->primary('swimmerid');
            //$table->foreign('swimmerid')->references('id')->on('users');
            //$table->foreign('coachid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('swimmer');
    }
}
