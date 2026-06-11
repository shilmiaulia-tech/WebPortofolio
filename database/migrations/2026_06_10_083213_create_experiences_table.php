<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company');         // Nama perusahaan/organisasi
            $table->string('position');        // Posisi/jabatan
            $table->string('type');            // Internship, Freelance, Organisasi, dll
            $table->string('year_start');
            $table->string('year_end');        // Bisa "Present"
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};