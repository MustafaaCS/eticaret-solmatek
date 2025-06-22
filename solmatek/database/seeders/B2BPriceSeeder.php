<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class B2BPriceSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\B2BPrice::factory()->count(5)->create();
    }
}
