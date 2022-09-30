<?php

namespace Database\Seeders;

use App\Models\Introduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Introduction::factory()->count(1)->create();
    }
}
