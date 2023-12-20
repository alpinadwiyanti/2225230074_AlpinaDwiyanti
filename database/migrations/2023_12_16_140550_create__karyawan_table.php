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
        Schema::create('_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->string('tanggal_masuk');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_karyawan');
    }
};
