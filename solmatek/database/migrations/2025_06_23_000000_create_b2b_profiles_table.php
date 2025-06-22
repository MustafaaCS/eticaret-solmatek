<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * B2B profil tablosu.
     */
    public function up(): void
    {
        Schema::create('b2b_profiles', function (Blueprint $table) {
            $table->id();
            // Kullanıcı ilişkisi
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // Şirket adı
            $table->string('company_name');
            // Vergi numarası
            $table->string('tax_number')->nullable();
            // İletişim adresi
            $table->string('address')->nullable();
            // Fiyatların görünüp görünmeyeceği
            $table->boolean('show_prices')->default(true);
            // Onay durumu: beklemede, onaylı, ret
            $table->string('status')->default('beklemede');
            // Bayi için özel notlar
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('b2b_profiles');
    }
};
