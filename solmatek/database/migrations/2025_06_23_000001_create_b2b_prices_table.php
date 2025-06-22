<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Bayi özel fiyatları.
     */
    public function up(): void
    {
        Schema::create('b2b_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('b2b_profile_id')->constrained('b2b_profiles')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('b2b_prices');
    }
};
