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
            $newDay->day_name = 'day ' . $i + 1;

            $newDay->save();

            $rand_length = rand(1, 6);
            $rand_array = [];
            while (count($rand_array) <= $rand_length) {
                $rand_num = rand(1, 10);
                if (!in_array($rand_num, $rand_array)) {
                    array_push($rand_array, $rand_num);
                }
            }
            $newDay->weeks()->attach($rand_array);
            $newDay->exercises()->attach($rand_array);
        }
    }
}
