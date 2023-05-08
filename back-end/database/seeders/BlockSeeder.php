<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            $newBlock = new Block();
            $newBlock->block_name = 'block_' . $i + 1;;
            $newBlock->coach_id = 0;
            $newBlock->athlete_id = $i;
            $newBlock->save();
        }
    }
}
