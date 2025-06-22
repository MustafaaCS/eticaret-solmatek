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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Ürünün bağlı olduğu kategori
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            // Ürün adı
            $table->string('title');
            // SEO uyumlu slug
            $table->string('slug')->unique();
            // Ürün açıklaması
            $table->text('description')->nullable();
            // Fiyat bilgisi
            $table->decimal('price', 10, 2)->default(0);
            // Stok miktarı
            $table->integer('stock')->default(0);
            // Görsel yolu
            $table->string('image')->nullable();
            // Etiketler: yeni/paket/stokta yok
            $table->string('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
