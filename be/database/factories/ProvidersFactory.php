<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Providers>
 */
class ProvidersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->Name,
            'email' => $this->faker->userName . '@company.com',

            'phone_number' => '0' . $this->faker->numerify('##########'),
            'address' => $this->faker->address,

            'status_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
