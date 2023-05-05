<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $newWeek = new Week();

            if ($i < 5) {
                $block_id = 1;
            } else {
                $block_id = 2;
            }
            $newWeek->block_id = $block_id;
            $newWeek->save();
        }
    }
}
