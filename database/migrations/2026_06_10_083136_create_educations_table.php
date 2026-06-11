<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('school');        // Nama sekolah/kampus
            $table->string('degree');        // Jenjang: SMA, D3, S1, dll
            $table->string('field');         // Jurusan
            $table->string('year_start');    // Tahun masuk
            $table->string('year_end');      // Tahun lulus / "Present"
            $table->text('description')->nullable(); // Deskripsi singkat
            $table->string('logo')->nullable();      // Logo sekolah (opsional)
            $table->integer('order')->default(0);    // Urutan tampil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};