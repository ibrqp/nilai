<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2024_02_21_013808_create_nilais_table.php
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswas');
            $table->unsignedBigInteger('id_mapel');
            $table->foreign('id_mapel')->references('id')->on('mapels');
            $table->string('nilai');
========
        Schema::create('pkls', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswas');
            $table->unsignedBigInteger('id_dudi');
            $table->foreign('id_dudi')->references('id')->on('dudis');
>>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:database/migrations/2024_02_20_013602_create_pkls_table.php
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
<<<<<<<< HEAD:database/migrations/2024_02_21_013808_create_nilais_table.php
        Schema::dropIfExists('nilais');
========
        Schema::dropIfExists('pkls');
>>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:database/migrations/2024_02_20_013602_create_pkls_table.php
    }
};
