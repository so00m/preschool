<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // switch (){

        //teacher id & class name

        // };

        return [
            'name' =>fake()->randomElement(['Art & Drawing', 'Color Management', 'Athletic & Dance', 'Language & Speaking', 'Religion & History','General Knowledge']),
            'description'=>fake()->sentence(),
            'NumOfChildren'=>fake()->randomElement([30]),
            'age_range'=>fake()->randomElement([5]),
            'teacher_id'=>fake()->numberBetween(1,6) ,
            'price'=>fake()->numberBetween(70,90),
            'start_time'=>fake()->time('H'),
            'end_time'=>fake()->time('H'),
            'start_date'=>fake()->date(),
            'end_date'=>fake()->date(),
        ];
    }
}
