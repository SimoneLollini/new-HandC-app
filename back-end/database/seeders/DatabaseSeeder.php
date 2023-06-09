<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BlockSeeder::class,
            WeekSeeder::class,
            ExerciseSeeder::class,
            DaySeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'simo',
            'email' => 'simo@example.com',
            'password' => Hash::make('password')
        ]);
    }
}
