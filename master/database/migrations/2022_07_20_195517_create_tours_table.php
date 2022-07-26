<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('departure');
            $table->string('departure_time');
            $table->string('maximum_travellers');
            $table->string('languages');
            $table->string('popular_places');
            $table->integer('price');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');

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
        Schema::dropIfExists('tours');
    }
}
