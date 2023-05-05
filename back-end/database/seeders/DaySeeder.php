<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $newDay = new Day();
            $newDay->save();

            $rand_num = rand(1, 10);
            $newDay->weeks()->attach($rand_num);

            $big_rand_num = rand(1, 20);
            $newDay->exercises()->attach($big_rand_num);
        }
    }
}
