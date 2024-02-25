<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'password' => Hash::make('111'),

            'email' => $this->faker->userName . '@gmail.com',
            'fullname' => $this->faker->firstName . ' ' . $this->faker->lastName,

            'address' => $this->faker->address,
            'phone_number' => '0' . $this->faker->numerify('#########'),

            'status_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
