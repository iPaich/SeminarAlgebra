<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToFilmoviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('filmovi', function (Blueprint $table) {
  $table->foreign('id_zanr','filmovi_fk1')->references('id')->on('zanr')->onUpdate('restrict')->onDelete('restrict');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('filmovi', function(Blueprint $table)
		{
			$table->dropForeign('filmovi_fk1');
		});
    }
}
