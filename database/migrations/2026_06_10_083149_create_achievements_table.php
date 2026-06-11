<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // Nama penghargaan
            $table->string('organizer');       // Penyelenggara
            $table->string('year');            // Tahun
            $table->string('level');           // Tingkat: Nasional, Regional, dll
            $table->text('description')->nullable();
            $table->string('certificate')->nullable(); // Link/file sertifikat
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};