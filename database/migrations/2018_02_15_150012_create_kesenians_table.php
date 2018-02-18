<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeseniansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesenians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('asal');
            $table->string('fungsi');
            $table->string('jenis_kesenian');
            $table->text('sejarah');
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
        Schema::dropIfExists('kesenians');
    }
}
