<?php

namespace Database\Seeders;

use App\Models\NoteEight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteEightSeeder extends Seeder
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
                'question' => 'Adanya Tim Penanganan Masalah Kesejahteraan Sosial (Tim Koordinasi Penanggulangan Kemiskinan Daerah/TKPKD/Tim Bansos Pangan dll.)',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'Melakukan update data ke dalam Sistem Informasi Kesejahteraan Sosial Next Generation (SIKSNG) secara rutin',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya peraturan mengenai Penanganan Masalah Kesejahteraan Sosial suaikan dengan daerahnya',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya layanan pengaduan terkait masalah-masalah sosial (masalah bantuan sosial dll.)',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Adanya penanganan masalah kesejahteraan sosial dalam Rencana Pembangunan Jangka Menengah Daerah/RPJMD',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Adanya kegiatan penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) yang aktif dalam setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Pemerlu pelayanan kesejahteraan sosial (PPKS) yang diberikan jaminan sosial',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Adanya kegiatan pelatihan khusus bagi pemerlu pelayanan kesejahteraan sosial (PPKS)',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Keberadaan penggiat penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) baik secara individu/kelompok',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Adanya kerjasama dengan stakeholder masyarakat (seperti pihak swasta, akademisi, instansi pemerintah terkait, lembaga keagamaan, individu/donatur, dll) dalam kegiatan penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) di daerah setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Capaian target penurunan angka kemiskinan (4%-6%)',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Adanya upaya pemerintah daerah dan swasta dalam peningkatan kemampuan ekonomi untuk komunitas adat terpencil dan daerah perbatasan (misal pendidikan dan pelatihan, bantuan stimulan dll.)',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Adanya program pemberdayaan/pendidikan khusus bagi wanita dan anak-anak komunitas adat terpencil dan daerah perbatasan',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Adanya program pemenuhan kebutuhan kesehatan bagi komunitas adat terpencil dan daerah perbatasan',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Adanya pemenuhan hak sipil bagi komunitas adat terpencil dan daerah perbatasan, misal hak sipil pendaftaran pernikahan',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Adanya penggiat komunitas adat terpencil baik secara individu/kelompok/lembaga sosial/yayasan',
                'setting_id' => 1
            ],
            [
                'code' => 'p17',
                'question' => 'Adanya regulasi daerah tentang penanganan kekerasan anak, perempuan dan lansia',
                'setting_id' => 1
            ],
            [
                'code' => 'p18',
                'question' => 'Adanya penyelenggaraan penanganan kekerasan anak, perempuan dan lansia dalam Rencana Pembangunan Jangka Menengah Daerah/RPJMD',
                'setting_id' => 1
            ],
            [
                'code' => 'p19',
                'question' => 'Adanya upaya penanganan dan pencegahan angka kekerasan terhadap anak',
                'setting_id' => 1
            ],
            [
                'code' => 'p20',
                'question' => 'Upaya pencegahan untuk menurunkan angka perkawinan pada usia anak',
                'setting_id' => 1
            ],
            [
                'code' => 'p21',
                'question' => 'Adanya upaya pencegahan praktek sunat pada anak perempuan',
                'setting_id' => 1
            ],
            [
                'code' => 'p22',
                'question' => 'Adanya upaya pendidikan penyuluhan, komunikasi dan informasi tentang kekerasan terhadap perempuan',
                'setting_id' => 1
            ],
            [
                'code' => 'p23',
                'question' => 'Adanya UPTD PA/P2TP2A (Pusat Pelayanan Terpadu Pemberdayaan Perempuan dan Anak) dalam penanganan kekerasan pada anak, perempuan dan lansia',
                'setting_id' => 1
            ],
            [
                'code' => 'p24',
                'question' => 'Adanya penanganan kasus hukum kekerasan terhadap anak, perempuan dan lansia',
                'setting_id' => 1
            ],
            [
                'code' => 'p25',
                'question' => 'Keberadaan penggiat penanganan kekerasan terhadap anak, perempuan dan lansia baik secara individu/kelompok',
                'setting_id' => 1
            ],
            [
                'code' => 'p26',
                'question' => 'Jumlah kasus kekerasan terhadap anak, perempuan dan lansia yang dilaporkan setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p27',
                'question' => 'Adanya perencanaan dan penganggaran responsif gender',
                'setting_id' => 1
            ],
            [
                'code' => 'p28',
                'question' => 'Memiliki program Rute Aman Selamat ke Sekolah (RASS) yang rutin di sosialisasikan setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p29',
                'question' => 'Adanya sarana prasarana dalam mendukung program Rute Aman Selamat ke Sekolah (RASS) seperti halte penumpang angkutan umum, Zone Selamat Sekolah (ZOSS) dan fasilitas untuk pesepeda dan pejalan kaki',
                'setting_id' => 1
            ],
            [
                'code' => 'p30',
                'question' => 'Adanya upaya dan peran serta keluarga, masyarakat, media massa dan pemerintah daerah dalam upaya mencegah radikalisme dan tindak pidana terorisme setahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p31',
                'question' => 'Kegiatan pemberdayaan komunitas mantan narapidana teroris/orang terpapar radikalisme',
                'setting_id' => 1
            ],
            [
                'code' => 'p32',
                'question' => 'Keberadaan regulasi dalam pencegahan dan penanggulangan radikalisme dan aksi terorisme',
                'setting_id' => 1
            ],
            [
                'code' => 'p33',
                'question' => 'Kerjasama pemerintah daerah dengan stakeholder terkait dalam pencegahan dan penanggulangan radikalisme',
                'setting_id' => 1
            ],
            [
                'code' => 'p34',
                'question' => 'Kegiatan edukasi seperti sosialisasi, penyebaran materi komunikasi, informasi dan edukasi tentang bahaya terorisme',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteEight::create($question);
        }
    }
}
