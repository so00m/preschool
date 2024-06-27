<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'first_name' =>fake()->firstname(),
            'last_name'=>fake()->lastname(),
            'birth_date'=>fake()->date(),
            'grade'=>fake()->numberBetween(1,2),
            'parent_id' =>fake()->numberBetween(1,20),
        ];
    }
}
