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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // Kategori başlığı
            $table->string('name');
            // SEO uyumlu slug alanı
            $table->string('slug')->unique();
            // Kategoriyi tanımlayan açıklama
            $table->text('description')->nullable();
            // Menüde gösterilecek ikon
            $table->string('icon')->nullable();
            // Sıralama değeri
            $table->integer('ordering')->default(0);
            // Aktif/pasif durumu
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
