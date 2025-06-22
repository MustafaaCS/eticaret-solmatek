<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class B2BProfileSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\B2BProfile::factory()->count(2)->create();
    }
}
