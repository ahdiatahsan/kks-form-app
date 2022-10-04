<?php

namespace Database\Seeders;

use App\Models\NoteSix;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSixSeeder extends Seeder
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
                'question' => 'Adanya regulasi/kebijakan terkait penyediaan layanan transportasi publik'
            ],
            [
                'code' => 'p2',
                'question' => 'Adanya regulasi/kebijakan terkait kawasan tertib lalu lintas'
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya regulasi/kebijakan terkait sistem manajemen keselamatan lalu lintas dan angkutan jalan'
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya regulasi/kebijakan terkait analisis dampak lalu lintas'
            ],
            [
                'code' => 'p5',
                'question' => 'Penyediaan layanan transportasi publik dan kawasan tertib lalu lintas masuk ke dalam dokumen perencanaan pembangunan daerah'
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase implementasi protokol kesehatan dalam angkutan umum'
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase kendaraan umum yang laik jalan'
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase kendaraan umum yang memiliki BLUe (Bukti Lulus Uji Elektronik)'
            ],
            [
                'code' => 'p9',
                'question' => 'Adanya bengkel pemantau emisi gas buang'
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase penurunan tingkat fatalitas akibat kecelakaan setahun terakhir'
            ],
            [
                'code' => 'p11',
                'question' => 'Santunan akibat kecelakaan sebagai dampak kecelakaan lalu lintas setahun terakhir'
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase jam kerja pengemudi : maksimal 12 jam dan 4 jam istirahat angkutan umum'
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase perusahaan angkutan yang telah membuat dan melaporkan sistem manajemen keselamatan'
            ],
            [
                'code' => 'p14',
                'question' => 'Pelaksanaan pengecekan terhadap kondisi kesehatan pengemudi cek narkoba, cek kesehatan dan sebagainya'
            ],
            [
                'code' => 'p15',
                'question' => 'Terdapat pos, fasilitas dan petugas pemeriksa kelaikan umum, fasilitas perbaikan ringan kendaraan umum pada Terminal'
            ],
            [
                'code' => 'p16',
                'question' => 'Keberadaan fasilitas istirahat awak kendaraan'
            ],
            [
                'code' => 'p17',
                'question' => 'Melakukan pemantauan kualitas udara ambien'
            ],
            [
                'code' => 'p18',
                'question' => 'Tindak lanjut pengendalian kualitas udara ambien (luar ruang/lingkungan luar)'
            ],
            [
                'code' => 'p19',
                'question' => 'Tersedia ruang tunggu, fasilitas ibadah, rumah makan, fasilitas dan petugas kebersihan, lampu penerangan ruangan'
            ],
            [
                'code' => 'p20',
                'question' => 'Tersedia fasilitas bagi penumpang penyandang disabilitas dan ibu hamil atau menyusui'
            ],
            [
                'code' => 'p21',
                'question' => 'Sarana cuci tangan pakai sabun pada Terminal'
            ],
            [
                'code' => 'p22',
                'question' => 'Persentase sentra pangan jajanan/kantin dalam terminal yang telah memenuhi standar kesehatan higiene (tempat cuci tangan,tempat mencuci piring,tempat sampah, dll.)'
            ],
            [
                'code' => 'p23',
                'question' => 'Tersedianya toilet yang bersih'
            ],
            [
                'code' => 'p24',
                'question' => 'Tersedianya Ruang Terbuka Hijau'
            ],
            [
                'code' => 'p25',
                'question' => 'Tersedia pelayanan kesehatan (pos/ruangan, fasilitas, dan petugas kesehatan)'
            ],
            [
                'code' => 'p26',
                'question' => 'Adanya penerapan Kawasan Tanpa Rokok'
            ],
            [
                'code' => 'p27',
                'question' => 'Kasus kriminalitas di teminal'
            ],
            [
                'code' => 'p28',
                'question' => 'Fasilitas pencegah tindak kriminal'
            ],
            [
                'code' => 'p29',
                'question' => 'Persentase halte yang berfungsi dari jumlah eksisting secara layak pakai, terawat dan bersih'
            ],
            [
                'code' => 'p30',
                'question' => 'Keberadaan sistem layanan pertolongan kecelakaan yang cepat dan terintegrasi'
            ],
            [
                'code' => 'p31',
                'question' => 'Tersedianya data/informasi daerah rawan kecelakaan'
            ],
            [
                'code' => 'p32',
                'question' => 'Edukasi penanganan tanggap kecelakaan pada masyarakat di daerah rawan kecelakaan'
            ],
            [
                'code' => 'p33',
                'question' => 'Jumlah titik kemacetan'
            ],
            [
                'code' => 'p34',
                'question' => 'Keberadaan fasilitas jalur pejalan kaki dan penyandang disabilitas'
            ],
            [
                'code' => 'p35',
                'question' => 'Jumlah titik fasilitas jalur sepeda'
            ],
            [
                'code' => 'p36',
                'question' => 'Fasilitas penyeberangan orang (jembatan penyeberangan, zebra cross)'
            ],
            [
                'code' => 'p37',
                'question' => 'Adanya kegiatan sosialisasi keselamatan berlalu lintas dan keselamatan jalan'
            ],
            [
                'code' => 'p38',
                'question' => 'Jumlah penindakan pelanggaran lalu lintas'
            ],
            [
                'code' => 'p39',
                'question' => 'Adanya zona selamat sekolah'
            ],
            [
                'code' => 'p40',
                'question' => 'Adanya ruang henti sepeda motor pada simpang bersinyal (lampu merah)'
            ],
            [
                'code' => 'p41',
                'question' => 'Pengawasan dan penindakan terhadap emisi gas buang kendaraan'
            ],
            [
                'code' => 'p42',
                'question' => 'Adanya forum lalu lintas dan angkutan jalan (LLAJ)'
            ],
            [
                'code' => 'p43',
                'question' => 'Persentase sekolah menengah yang memiliki patroli keamanan sekolah (PKS)'
            ]
        ];

        foreach($questions as $question){
            NoteSix::create($question);
        }
    }
}
