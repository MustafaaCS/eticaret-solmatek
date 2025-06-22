<?php

namespace Database\Factories;

use App\Models\B2BProfile;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\B2BPrice>
 */
class B2BPriceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'b2b_profile_id' => B2BProfile::factory(),
            'product_id' => Product::factory(),
            'price' => $this->faker->randomFloat(2, 5, 400),
        ];
    }
}
