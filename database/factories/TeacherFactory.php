<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'email' =>fake()->unique()->safeEmail(),
            'image' =>fake()->randomElement([1719085620,1719085620,1719085620]).'-jpg',
            'published'=>fake()->boolean(),
        ];
    }
}
