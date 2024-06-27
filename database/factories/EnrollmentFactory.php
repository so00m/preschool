<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Enrollment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registerDate'=>fake()->date(),
            'status'=>fake()->randomElement(['pending','approved','active','rejected','cancelled']),
            'child_id'=>fake()->numberBetween(1,30),
            'class_id'=>fake()->numberBetween(1,30),
        ];
    }
}
