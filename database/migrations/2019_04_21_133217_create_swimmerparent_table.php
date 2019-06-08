<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwimmerparentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimmerparent', function (Blueprint $table) {
            $table->bigInteger('swimmerid');
            $table->bigInteger('parentid');
            $table->boolean('swimmerconfirmed');
            $table->boolean('parentconfirmed');
            $table->timestamps();

            $table->primary(['swimmerid', 'parentid']);
            //$table->foreign('swimmerid')->references('swimmerid')->on('swimmer');
            //$table->foreign('parentid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('swimmerparent');
    }
}
