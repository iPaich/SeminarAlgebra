<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmoviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmovi', function (Blueprint $table) {
          $table->increments('id');
          $table->string('naslov');
          $table->integer('id_zanr')->unsigned();
          $table->integer('godina');
          $table->integer('trajanje');
          $table->string('slika');
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
        Schema::dropIfExists('filmovi');
    }
}
