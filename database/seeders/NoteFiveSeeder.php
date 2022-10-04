<?php

namespace Database\Seeders;

use App\Models\NoteFive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteFiveSeeder extends Seeder
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
                'question' => 'Keberadaan regulasi daerah tentang Pariwisata Sehat'
            ],
            [
                'code' => 'p2',
                'question' => 'RIPPARDA masuk dalam RPJMD/Renstra/RKPD'
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya desa wisata yang dikelola oleh Lembaga Pemasyarakatan Masyarakat Desa (LPMD)'
            ],
            [
                'code' => 'p4',
                'question' => 'Tersedianya informasi pariwisata di tempat umum (hotel, bandara/pelabuhan, dll)'
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase sarana akomodasi pariwisata yang laik sehat'
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase restoran yang laik hygiene'
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase DTW yang memenuhi syarat kesehatan'
            ],
            [
                'code' => 'p8',
                'question' => 'Jumlah DTW yang mengimplementasi kawasan tanpa rokok (KTR)'
            ],
            [
                'code' => 'p9',
                'question' => 'Memiliki sarana transportasi yang layak'
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase DTW yang ramah difabel'
            ],
            [
                'code' => 'p11',
                'question' => 'DTW menyediakan asuransi keselamatan bagi wisatawan'
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase DTW yang menerapkan K3'
            ],
            [
                'code' => 'p13',
                'question' => 'Adanya kasus kecelakaan di daya tarik wisata'
            ],
            [
                'code' => 'p14',
                'question' => 'Adanya kerjasama dengan Petugas Keamanan (Polisi Pariwisata, Satpam/Masyarakat yang ditunjuk)'
            ],
            [
                'code' => 'p15',
                'question' => 'Keberadaan DTW yang menyediakan fasilitas pelayanan kesehatan'
            ],
            [
                'code' => 'p16',
                'question' => 'Keberadaan DTW yang melaksanakan program ramah lingkungan'
            ],
            [
                'code' => 'p17',
                'question' => 'Keberadaan rencana kerja dan implementasi program pengembangan Kelompok Sadar Wisata (Pokdarwis, Bumdes)'
            ],
            [
                'code' => 'p18',
                'question' => 'Keberadaan Pokdarwis, Bumdes'
            ],
            [
                'code' => 'p19',
                'question' => 'Dinas pariwisata mengalokasikan program pemberdayaan masyrakat di destinasi wisata berupa gerakan Aksi Sapta Pesona dan Gerakan Sadar Wisata'
            ],
            [
                'code' => 'p20',
                'question' => 'Keberadaan pembinaan kesehatan terhadap kelompok masyarakat sekitar daya tarik wisata (kelompok tari, kelompok seni, pedagang aksesoris dll) setahun terakhir'
            ],
            [
                'code' => 'p21',
                'question' => 'Persentase TPP Non SLHS yang dilakukan pembinaan/pengawasan dengan pemberian label'
            ]
        ];

        foreach($questions as $question){
            NoteFive::create($question);
        }
    }
}
