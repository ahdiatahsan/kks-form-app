<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            UserSeeder::class,

            TatananOneSeeder::class,
            TatananTwoSeeder::class,
            TatananThreeSeeder::class,
            TatananFourSeeder::class,
            TatananFiveSeeder::class,
            TatananSixSeeder::class,
            TatananSevenSeeder::class,
            TatananEightSeeder::class,
            TatananNineSeeder::class,
            
            AttachmentOneSeeder::class,
            AttachmentTwoSeeder::class,
            AttachmentThreeSeeder::class,
            AttachmentFourSeeder::class,
            AttachmentFiveSeeder::class,
            AttachmentSixSeeder::class,
            AttachmentSevenSeeder::class,
            AttachmentEightSeeder::class,
            AttachmentNineSeeder::class,

            AttachmentOneNdSeeder::class,
            AttachmentTwoNdSeeder::class,
            AttachmentThreeNdSeeder::class,
            AttachmentFourNdSeeder::class,
            AttachmentFiveNdSeeder::class,
            AttachmentSixNdSeeder::class,
            AttachmentSevenNdSeeder::class,
            AttachmentEightNdSeeder::class,
            AttachmentNineNdSeeder::class,
        ]);
    }
}
