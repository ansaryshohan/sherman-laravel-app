<?php

namespace Database\Factories;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone_no' => fake()->phoneNumber(),
            'description' => fake()->paragraph(1),
            'client_image' => fake()->image(),
        ];
    }
}
