<?php

namespace Database\Factories;
use App\Models\Enrollment;
use App\Models\Child;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;
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
            'Child_id'=>Child::factory(),
            'class_id'=>Classes::factory(),
        ];
    }
}
