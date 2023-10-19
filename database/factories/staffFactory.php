<?php

namespace Database\Factories;

use App\Models\staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\staff>
 */
class staffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->userName(),
            'password' => fake()->password(),
            'nama' => fake()->name(),
            'jabatan' => fake()->randomElement(['Barista', 'Kasir', 'Waiters']),
        ];
    }
}
