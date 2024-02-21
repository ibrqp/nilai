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
        Schema::create('dudis', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_02_12_014417_create_mapels_table.php
            $table->unsignedBigInteger('id_guru');
            $table->foreign('id_guru')->references('id')->on('gurus');
            $table->string('nama_mapel');
=======
            $table->string('nama');
            $table->string('alamat');
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:database/migrations/2024_02_20_013532_create_dudis_table.php
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
        Schema::dropIfExists('dudis');
    }
};
