<?php

namespace Database\Factories;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\menu>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->randomElement(['Orange Juice', 'Esspreso', 'Crunchy Caramel', 'French Fries', 'Fried Chicken', 'Hot Chocolate', 'Meatball', 'Pastry Rasberries', 'Chocolate Cookies']),
            'stok' => fake()->randomDigitNotZero(),
            'harga' => fake()->randomNumber(5, true),
            'kategori_id' => kategori::all()->random()->id,
        ];
    }
}
