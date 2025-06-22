<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\B2BProfile>
 */
class B2BProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'company_name' => $this->faker->company(),
            'tax_number' => $this->faker->numerify('########'),
            'address' => $this->faker->address(),
            'show_prices' => true,
            'status' => 'onayli',
            'notes' => $this->faker->sentence(),
        ];
    }
}
