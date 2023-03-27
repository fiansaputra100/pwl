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
        Schema::create('keluarga', function (Blueprint $table) {
            $table->string('NIK',16) ->primary();
            $table->string('nama_keluarga',30);
            $table->date('tanggal_lahir',30);
            $table->string('tempat_lahir',30);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('agama',30);
            $table->string('status_perkawinan',30);
            $table->string('status_hubungan',30);
            $table->string('kewarganegaraan',30);
            $table->string('jenis_pekerjaan',30);
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
        Schema::dropIfExists('keluargas');
    }
};
