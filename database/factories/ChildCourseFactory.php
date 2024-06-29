<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChildCourse>
 */
class ChildCourseFactory extends Factory
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
            'course_id'=>fake()->numberBetween(1,6),
        ];
    }
}
