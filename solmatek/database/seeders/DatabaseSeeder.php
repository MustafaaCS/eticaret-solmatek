<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Örnek kullanıcı
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        // Kategori ve ürün örnekleri
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            B2BProfileSeeder::class,
            B2BPriceSeeder::class,
        ]);
    }
}
