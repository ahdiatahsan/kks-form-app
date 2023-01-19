<?php

namespace Database\Seeders;

use App\Models\NoteFour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteFourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'code' => 'p1',
                'question' => 'Keberadaan regulasi daerah tentang pelaksanaan program UKS/M',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'Keberadaan program UKS/M dalam perencanaan daerah (RPJMD, RKPD, Renstra PD dan Renja PD)',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Keberadaan Tim Pembina UKS/M',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Keberadaan rapat koordinasi (rakor) Tim Pembina UKS/M yang dilakukan secara rutin',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Presentase Sekolah/Madrasah yang memiliki tim pelaksana UKS/M dibuktikan dengan SK',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase sekolah yang menerapkan stratifikasi standar UKS/M',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase Sekolah/Madrasah yang memenuhi syarat sesuai IKL',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase sekolah/madrasah yang melakukan pengawasan internal',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase sekolah yang menerapkan Satuan Pendidikan Ramah Anak',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Tersedianya sekolah yang menerapkan pendidikan inklusif',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Presentase sekolah yang menerapkan Adiwiyata',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Presentase Pondok Pesantren menerapkan Pondok Pesantren Sehat',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Presentase sekolah pendidikan usia dini/PAUD yang menyelenggarakan promosi kesehatan dan penjaringan kesehatan',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Jumlah sekolah yang menerapkan model pembelajaran sekolah sehat, contoh: sekolah menjadi pusat pembelajaran sekolah sehat, dll.',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Keberadaan sekolah yang mengembangkan sistem informasi terintegrasi (contoh: data peserta didik, data kesehatan, data kondisi kesehatan lingkungan sekolah, dll.)',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Adanya kegiatan kemitraan sekolah dengan pihak luar untuk mencapai sekolah sehat',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteFour::create($question);
        }
    }
}
