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
                'question' => 'Adanya regulasi/kebijakan terkait penyediaan layanan transportasi publik',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'Adanya regulasi/kebijakan terkait kawasan tertib lalu lintas',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya regulasi/kebijakan terkait sistem manajemen keselamatan lalu lintas dan angkutan jalan',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya regulasi/kebijakan terkait analisis dampak lalu lintas',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Penyediaan layanan transportasi publik dan kawasan tertib lalu lintas masuk ke dalam dokumen perencanaan pembangunan daerah',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase implementasi protokol kesehatan dalam angkutan umum',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase kendaraan umum yang laik jalan',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase kendaraan umum yang memiliki BLUe (Bukti Lulus Uji Elektronik)',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Adanya bengkel pemantau emisi gas buang',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase penurunan tingkat fatalitas akibat kecelakaan setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Santunan akibat kecelakaan sebagai dampak kecelakaan lalu lintas setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase jam kerja pengemudi : maksimal 12 jam dan 4 jam istirahat angkutan umum',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase perusahaan angkutan yang telah membuat dan melaporkan sistem manajemen keselamatan',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Pelaksanaan pengecekan terhadap kondisi kesehatan pengemudi cek narkoba, cek kesehatan dan sebagainya',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Terdapat pos, fasilitas dan petugas pemeriksa kelaikan umum, fasilitas perbaikan ringan kendaraan umum pada Terminal',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Keberadaan fasilitas istirahat awak kendaraan',
                'setting_id' => 1
            ],
            [
                'code' => 'p17',
                'question' => 'Melakukan pemantauan kualitas udara ambien',
                'setting_id' => 1
            ],
            [
                'code' => 'p18',
                'question' => 'Tindak lanjut pengendalian kualitas udara ambien (luar ruang/lingkungan luar)',
                'setting_id' => 1
            ],
            [
                'code' => 'p19',
                'question' => 'Tersedia ruang tunggu, fasilitas ibadah, rumah makan, fasilitas dan petugas kebersihan, lampu penerangan ruangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p20',
                'question' => 'Tersedia fasilitas bagi penumpang penyandang disabilitas dan ibu hamil atau menyusui',
                'setting_id' => 1
            ],
            [
                'code' => 'p21',
                'question' => 'Sarana cuci tangan pakai sabun pada Terminal',
                'setting_id' => 1
            ],
            [
                'code' => 'p22',
                'question' => 'Persentase sentra pangan jajanan/kantin dalam terminal yang telah memenuhi standar kesehatan higiene (tempat cuci tangan,tempat mencuci piring,tempat sampah, dll.)',
                'setting_id' => 1
            ],
            [
                'code' => 'p23',
                'question' => 'Tersedianya toilet yang bersih',
                'setting_id' => 1
            ],
            [
                'code' => 'p24',
                'question' => 'Tersedianya Ruang Terbuka Hijau',
                'setting_id' => 1
            ],
            [
                'code' => 'p25',
                'question' => 'Tersedia pelayanan kesehatan (pos/ruangan, fasilitas, dan petugas kesehatan)',
                'setting_id' => 1
            ],
            [
                'code' => 'p26',
                'question' => 'Adanya penerapan Kawasan Tanpa Rokok',
                'setting_id' => 1
            ],
            [
                'code' => 'p27',
                'question' => 'Kasus kriminalitas di teminal',
                'setting_id' => 1
            ],
            [
                'code' => 'p28',
                'question' => 'Fasilitas pencegah tindak kriminal',
                'setting_id' => 1
            ],
            [
                'code' => 'p29',
                'question' => 'Persentase halte yang berfungsi dari jumlah eksisting secara layak pakai, terawat dan bersih',
                'setting_id' => 1
            ],
            [
                'code' => 'p30',
                'question' => 'Keberadaan sistem layanan pertolongan kecelakaan yang cepat dan terintegrasi',
                'setting_id' => 1
            ],
            [
                'code' => 'p31',
                'question' => 'Tersedianya data/informasi daerah rawan kecelakaan',
                'setting_id' => 1
            ],
            [
                'code' => 'p32',
                'question' => 'Edukasi penanganan tanggap kecelakaan pada masyarakat di daerah rawan kecelakaan',
                'setting_id' => 1
            ],
            [
                'code' => 'p33',
                'question' => 'Jumlah titik kemacetan',
                'setting_id' => 1
            ],
            [
                'code' => 'p34',
                'question' => 'Keberadaan fasilitas jalur pejalan kaki dan penyandang disabilitas',
                'setting_id' => 1
            ],
            [
                'code' => 'p35',
                'question' => 'Jumlah titik fasilitas jalur sepeda',
                'setting_id' => 1
            ],
            [
                'code' => 'p36',
                'question' => 'Fasilitas penyeberangan orang (jembatan penyeberangan, zebra cross)',
                'setting_id' => 1
            ],
            [
                'code' => 'p37',
                'question' => 'Adanya kegiatan sosialisasi keselamatan berlalu lintas dan keselamatan jalan',
                'setting_id' => 1
            ],
            [
                'code' => 'p38',
                'question' => 'Jumlah penindakan pelanggaran lalu lintas',
                'setting_id' => 1
            ],
            [
                'code' => 'p39',
                'question' => 'Adanya zona selamat sekolah',
                'setting_id' => 1
            ],
            [
                'code' => 'p40',
                'question' => 'Adanya ruang henti sepeda motor pada simpang bersinyal (lampu merah)',
                'setting_id' => 1
            ],
            [
                'code' => 'p41',
                'question' => 'Pengawasan dan penindakan terhadap emisi gas buang kendaraan',
                'setting_id' => 1
            ],
            [
                'code' => 'p42',
                'question' => 'Adanya forum lalu lintas dan angkutan jalan (LLAJ)',
                'setting_id' => 1
            ],
            [
                'code' => 'p43',
                'question' => 'Persentase sekolah menengah yang memiliki patroli keamanan sekolah (PKS)',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteSix::create($question);
        }
    }
}
