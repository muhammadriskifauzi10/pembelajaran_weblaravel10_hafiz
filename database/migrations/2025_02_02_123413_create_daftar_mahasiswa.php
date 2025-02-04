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
        Schema::create('daftar_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_mahasiswa');
    }
};
