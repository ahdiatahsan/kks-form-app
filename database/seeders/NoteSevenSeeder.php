<?php

namespace Database\Seeders;

use App\Models\NoteSeven;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSevenSeeder extends Seeder
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
                'question' => 'Adanya regulasi/kebijakan di Kawasan Perkantoran, Perindustrian (IKM) dan UMKM',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'Kegiatan penyelenggaraan kesehatan dan keselamatan kerja di Kawasan Perkantoran, Perindustrian (IKM) dan UMKM masuk dalam dokumen perencanaan pembangunan daerah',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Persentase kantor yang telah menerapkan K3',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Angka kecelakaan kerja di perkantoran setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase kantor yang memfasilitasi kegiatan aktivitas fisik/olahraga',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase kantor yang telah memfasilitas pemeriksaan kesehatan pada pegawainya',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase kantor yang menerapkan Kawasan Tanpa Rokok (KTR)',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase kantor yang memiliki ruang laktasi',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Jumlah Industri kecil dan menengah yang menyelenggarakan program Kesehatan Keselamatan Kerja/K3',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Pembinaan dan pengawasan dilokasi Industri',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Pemanfaatan kembali material dan sumber daya yang digunakan melalui konsep 4R oleh Industri kecil dan menengah',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase perusahaan menyampaikan laporan Rencana Pengelolaan Lingkungan (RKL)/ Rencana Pemantauan Lingkungan (RPL) / Upaya Pengelolaan Lingkungan (UKL)/ Upaya Pemantauan Lingkungan (UPL) secara berkala 6 bulan sekali',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Kasus pencemaran lingkungan dan pengaduan masyarakat setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Pos Upaya Kesehatan Kerja (UKK) aktif',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Persentase UMKM yang memiliki perijinan (NIB/TDP/SKU)',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Persentase UMKM sektor makanan, minuman, industri pengolahan yang memiliki Sertifikat Laik Higiene Sanitasi (SLHS), PIRT, POM',
                'setting_id' => 1
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase kecamatan yang melakukan penataan sentra pangan jajanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p18',
                'question' => 'Jumlah UMKM sentra pangan jajanan dan kantin yang memiliki Label pembinaan/pengawasan higiene sanitasi pangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p19',
                'question' => 'Persentase UMKM yang sudah menerapkan dan menuhi syarat standar kesehatan lingkungan kerja',
                'setting_id' => 1
            ],
            [
                'code' => 'p20',
                'question' => 'Persentase UMKM yang telah menerima pembinaan dan pengawasan',
                'setting_id' => 1
            ],
            [
                'code' => 'p21',
                'question' => 'Persentase UMKM yang memiliki pelayanan kesehatan / Pos UKK',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteSeven::create($question);
        }
    }
}
