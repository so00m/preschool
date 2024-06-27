<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Parents;
use App\Models\RegisterForClass;
use App\Models\User;
use App\Models\Child;
use App\Models\Teacher; 
use App\Models\Classes;



use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        User::factory(20)->create();
        Teacher::factory(30)->create();
        Parents::factory(30)->create();
        Child::factory(30)->create();
        Classes::factory(30)->create();
        RegisterForClass::factory(30)->create();
        
        

        // // Attach children to teachers (many-to-many relationship)
        // $teachers->each(function ($teacher) use ($children) {
        //     $teacher->children()->attach(
        //         $children->random(rand(1, 10))->pluck('id')->toArray()
        //     );
        // });

        // // Attach teachers to classes (many-to-many relationship)
        // $teachers->each(function ($teacher) use ($classes) {
        //     $teacher->classes()->attach($classes->random(rand(1, 10))->pluck('id')->toArray());
        // }); 
    }
}
