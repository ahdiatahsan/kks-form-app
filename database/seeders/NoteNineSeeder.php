<?php

namespace Database\Seeders;

use App\Models\NoteNine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteNineSeeder extends Seeder
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
                'question' => 'Adanya regulasi penanggulangan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'Upaya pencegahan dan penanggulangan bencana masuk ke dalam dokumen perencanaan daerah (seperti RPJMD, Renstra dan RKPD)',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya Badan/Unit Kerja yang menangani Penanggulangan Bencana Daerah',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya Tim/Unit Reaksi Cepat (TRC) dalam penanggulangan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Adanya rencana penanggulangan bencana dan rencana penanggulangan kedaruratan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Memiliki rencana kontingensi bencana daerah menurut hazard',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Melakukan kegiatan simulasi tanggap penanggulangan bencana minimal 1 kali dalam setahun.',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Keberadaan persediaan logistik dan peralatan yang mencukupi di masing-masing klaster daerah rawan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Upaya program penguatan dan pemulihan sosial untuk korban bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase desa/kelurahan tangguh bencana (Destana) yang sudah menerapkan Standar Nasional Indonesia/SNI sebagai acuan bersama dalam melakukan upaya pengelolaan resiko bencana di daerah rawan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Adanya sistem peringatan dini terintegrasi sesuai ancaman bencana wilayahnya (EWS longsor, EWS banjir, EWS tsunami)',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Adanya rambu dan papan informasi peringatan dini bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Pelaksanaan diseminasi informasi peringatan dini kepada stakeholder terkait dan masyarakat',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Keberadaan peta rawan bencana daerah',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Perencanaan wilayah/tata ruang yang telah mengacu pada peta rawan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Tersedianya SKDR sebagai sistem pemantauan perkembangan trend suatu penyakit menular yang potensial KLB/wabah dari waktu ke waktu',
                'setting_id' => 1
            ],
            [
                'code' => 'p17',
                'question' => 'Capaian Respon Alert (sinyal) SKDR',
                'setting_id' => 1
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase penyelenggaraan program Satuan Pendidikan Aman Bencana (SPAB) di sekolah pada daerah rawan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p19',
                'question' => 'Adanya fasilitas sarana prasarana pendidikan yang aman dari resiko bencana di setiap satuan pendidikan',
                'setting_id' => 1
            ],
            [
                'code' => 'p20',
                'question' => 'Memiliki Forum Pengurangan Risiko Bencana (FPRB) sebagai upaya pemberdayaan masyarakat dalam penanggulangan bencana di Kawasan Rawan Bencana (KRB)',
                'setting_id' => 1
            ],
            [
                'code' => 'p21',
                'question' => 'Melakukan kerjasama dengan pemerintah daerah lain yang berbatasan dengan kawasan Rawan Bencana (KRB) dalam upaya penanggulangan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p22',
                'question' => 'Adanya kerjasama desa/kelurahan rawan bencana dengan desa/kelurahan sekitarnya dalam rangka penanggulangan bencana',
                'setting_id' => 1
            ],
            [
                'code' => 'p23',
                'question' => 'Jumlah kerjasama dalam upaya penanggulangan bencana dengan pihak lain (Melampirkan dokumen kerjasama/MOU)',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteNine::create($question);
        }
    }
}
