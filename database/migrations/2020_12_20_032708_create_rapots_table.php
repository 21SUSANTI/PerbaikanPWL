<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('kelas');
            $table->string('semester');
            $table->string('pelajaran');
            $table->string('nilai');
            $table->string('walikelas');
            $table->string('kepalasekolah');
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
        Schema::dropIfExists('rapots');
    }
}
