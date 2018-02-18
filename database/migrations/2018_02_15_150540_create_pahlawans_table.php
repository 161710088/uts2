<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePahlawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pahlawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->date('wafat');
            $table->text('tempat_tinggal');
            $table->string('kota_asal');
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
        Schema::dropIfExists('pahlawans');
    }
}
