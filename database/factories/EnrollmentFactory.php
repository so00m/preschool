<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enrollment;
use App\Models\Child;
use App\Models\Classes;

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
            'registerDate'=>fake()->date('d-m'),
            'status'=>fake()->randomElement(['pending','approved','active','rejected','cancelled']),
            'class_id'=>Child::factory(),
            'Child_id'=>Classes::factory(),
        ];
    }
}
