<?php

namespace Database\Seeders;

use App\Models\TatananEight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TatananEightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TatananEights = [
            [
                'user_id' => 1,
                'setting_id' => 1
            ],
            [
                'user_id' => 2,
                'setting_id' => 1
            ],
            [
                'user_id' => 3,
                'setting_id' => 1
            ],
            [
                'user_id' => 4,
                'setting_id' => 1
            ],
            [
                'user_id' => 5,
                'setting_id' => 1
            ],
            [
                'user_id' => 6,
                'setting_id' => 1
            ],
            [
                'user_id' => 7,
                'setting_id' => 1
            ],
            [
                'user_id' => 8,
                'setting_id' => 1
            ],
            [
                'user_id' => 9,
                'setting_id' => 1
            ],
            [
                'user_id' => 10,
                'setting_id' => 1
            ],
            [
                'user_id' => 11,
                'setting_id' => 1
            ],
            [
                'user_id' => 12,
                'setting_id' => 1
            ],
            [
                'user_id' => 13,
                'setting_id' => 1
            ],
            [
                'user_id' => 14,
                'setting_id' => 1
            ],
            [
                'user_id' => 15,
                'setting_id' => 1
            ],
            [
                'user_id' => 16,
                'setting_id' => 1
            ],
            [
                'user_id' => 17,
                'setting_id' => 1
            ],
            [
                'user_id' => 18,
                'setting_id' => 1
            ],
            [
                'user_id' => 19,
                'setting_id' => 1
            ],
            [
                'user_id' => 20,
                'setting_id' => 1
            ],
            [
                'user_id' => 21,
                'setting_id' => 1
            ],
            [
                'user_id' => 22,
                'setting_id' => 1
            ],
            [
                'user_id' => 23,
                'setting_id' => 1
            ],
        ];

        foreach($TatananEights as $TatananEight){
            TatananEight::create($TatananEight);
        }
    }
}
