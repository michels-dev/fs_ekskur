<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ekskur_temporers', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah');
            $table->string('periode');
            $table->string('npwp');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('jenis_ekskur');
            $table->string('honor');
            $table->string('nama_bank');
            $table->string('norek');
            $table->string('atas_nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekskur_temporers');
    }
};
