<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Child;
use App\Models\Parents;
use Database\Factories\ParentsFactory;


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
            'grade'=>fake()->NumberBetween(1,2),
            'parent_id' => Parents::factory(),
        ];
    }
}
