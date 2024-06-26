<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Parent;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parent>
 */
class ParentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'first_name' =>fake()->firstname(),
            'last_name'=>fake()->lastname(),
            'phone' =>fake()->phoneNumber(),
            'address' =>fake()->address(),
            'email' =>fake()->unique()->safeEmail(),
            'job' =>fake()->jobTitle(),
        ];
    }
}
