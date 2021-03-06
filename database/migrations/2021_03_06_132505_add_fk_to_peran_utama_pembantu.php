<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToPeranUtamaPembantu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peran_utama_pembantu', function (Blueprint $table) {
            $table->foreign('pemain_id')->references('id')->on('pemain');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peran_utama_pembantu', function (Blueprint $table) {
            $table->dropForeign('film_id');
            $table->dropForeign('pemain_id');
        });
    }
}
