<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePulausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulaus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('koordinat');
            $table->string('luas'); 
            $table->string('kepulauan');
            $table->string('puncak_tertinggi');
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
        Schema::dropIfExists('pulaus');
    }
}
