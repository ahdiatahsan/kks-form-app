<?php

namespace Database\Seeders;

use App\Models\AttachmentNineNd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentNineNdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TatananNines = [
            [
                'user_id' => 1
            ],
            [
                'user_id' => 2
            ],
            [
                'user_id' => 3
            ],
            [
                'user_id' => 4
            ],
            [
                'user_id' => 5
            ],
            [
                'user_id' => 6
            ],
            [
                'user_id' => 7
            ],
            [
                'user_id' => 8
            ],
            [
                'user_id' => 9
            ],
            [
                'user_id' => 10
            ],
            [
                'user_id' => 11
            ],
            [
                'user_id' => 12
            ],
            [
                'user_id' => 13
            ],
            [
                'user_id' => 14
            ],
            [
                'user_id' => 15
            ],
            [
                'user_id' => 16
            ],
            [
                'user_id' => 17
            ],
            [
                'user_id' => 18
            ],
            [
                'user_id' => 19
            ],
            [
                'user_id' => 20
            ],
            [
                'user_id' => 21
            ],
            [
                'user_id' => 22
            ],
            [
                'user_id' => 23
            ],
        ];

        foreach($TatananNines as $TatananNine){
            AttachmentNineNd::create($TatananNine);
        }
    }
}
