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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->String('kode_karyawan');
            $table->String('nama');
            $table->enum('jabatan', ['apoteker', 'perawat', 'ahli_gizi', 'bidan', 'kebersihan']);
            $table->String('no_telp');
            $table->text('alamat');
            $table->String('photo');
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
        Schema::dropIfExists('karyawans');
    }
};
