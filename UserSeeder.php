<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'name' => fake()->name,
                'email' => fake()->email,
                'age' => fake()->numberBetween(18, 80),
            ]);
        }
    }

   
}
