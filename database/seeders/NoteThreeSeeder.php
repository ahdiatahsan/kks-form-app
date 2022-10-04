<?php

namespace Database\Seeders;

use App\Models\NoteThree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteThreeSeeder extends Seeder
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
                'question' => 'Keberadaan regulasi daerah tentang pasar sehat'
            ],
            [
                'code' => 'p2',
                'question' => 'Keberadaan regulasi penanganan PKL'
            ],
            [
                'code' => 'p3',
                'question' => 'Keberadaan program yang mendukung terkait Pasar Sehat dalam dokumen perencanaan daerah (RPJMD, RKPD, Renstra PD dan Renja PD)'
            ],
            [
                'code' => 'p4',
                'question' => 'Persentase pasar yang memiliki Pokja dan aktif (memiliki rencana kerja dan terealisasi)'
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase pasar yang memenuhi syarat sesuai IKL'
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase pasar yang melakukan pengawasan internal'
            ],
            [
                'code' => 'p7',
                'question' => 'Komunikasi, Informasi dan Edukasi (KIE) kepada masyarakat pasar'
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase pasar yang memiliki fasilitas ruang laktasi'
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase pasar yang memiliki fasilitas ruang Kesehatan'
            ],
            [
                'code' => 'p10',
                'question' => 'Adanya pengaturan dan penataan pedagang kaki lima (PKL)'
            ],
            [
                'code' => 'p11',
                'question' => 'Persentase pasar yang menerapkan K3'
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase pasar yang menjual daging berasal dari RPH/distributor yang memiliki NKV'
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase pasar yang menjual daging unggas berasal dari RPA/RPU yang memiliki NKV'
            ],
            [
                'code' => 'p14',
                'question' => 'Persentase pasar yang menjual unggas hidup di dalam pasar'
            ],
            [
                'code' => 'p15',
                'question' => 'Persentase pasar yang memiliki infrastruktur yang ramah untuk kaum difabel'
            ],
            [
                'code' => 'p16',
                'question' => 'Persentase pasar yang menerapkan pengelolaan sampah dengan prinsip 3R (reduce, reuse, dan recyle)'
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase pasar yang menerapkan pengelolaan air limbah'
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase pasar yang melakukan kegiatan kemitraan dengan berbagai pihak diluar manajemen pasar (instansi pemerintah lain, bank, media, perguruan tinggi dan perusahaan swasta lainnya) yang dilakukan secara rutin dalam rangka mewujudkan pasar sehat'
            ]
        ];

        foreach($questions as $question){
            NoteThree::create($question);
        }
    }
}
