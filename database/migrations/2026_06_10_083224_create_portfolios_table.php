<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();  // URL-friendly title
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('category');        // Video, Design, Photo, dll
            $table->string('type');            // youtube, instagram, behance, website, image, pdf
            $table->string('external_url')->nullable(); // Link eksternal
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};