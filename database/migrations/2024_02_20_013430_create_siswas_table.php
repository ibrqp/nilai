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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_02_12_014355_create_gurus_table.php
            $table->string('nama_guru');
=======
            $table->string('nama');
            $table->string('kelas');
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:database/migrations/2024_02_20_013430_create_siswas_table.php
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
        Schema::dropIfExists('siswas');
    }
};
