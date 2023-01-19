<?php

namespace Database\Seeders;

use App\Models\NoteTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteTwoSeeder extends Seeder
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
                'question' => 'Adanya regulasi pelaksanaan program pengendalian pencemaran kualitas udara',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'Adanya program pengendalian pencemaran kualitas udara di dalam dokumen erencanaan8',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya regulasi/kebijakan terkait pelaksanaan car free day',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Pelaksanaan car free day',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Adanya upaya pemerintah daerah dalam mengkampanyekan penggunaan bahan bakar ramah lingkungan (BBM rendah sulfur termasuk Bahan Bakar Gas/BBG, kendaraan berbahan listrik/solar sel, biodiesel, dll.) untuk transportasi publik dan / atau mobil pribadi dan/ atau industri',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Jumlah rumah tangga yang menggunakan salah satu atau beberapa energi alternatif yang ramah lingkungan: solar sel, LPG dan pemanfaatan gas metan',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Kampanye wajib tanam pohon bagi masyarakat yang dilakukan secara terencana dan bersinergi, baik melalui Surat edaran, Surat Keputusan, bilboard, leaflet, brosur, media cetak, atau elektronik',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase desa/kelurahan yang melaksanakan kegiatan wajib tanam pohon',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Melakukan pemantauan kualitas udara untuk menghitung Indeks Standar Pencemaran Udara/ISPU',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Nilai hasil pengukuran ISPU',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Nilai indeks kualitas udara',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Melakukan monitoring uji kualitas udara indoor secara berkala',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Melakukan edukasi dan diseminasi informasi kualitas udara ke masyarakat',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Upaya-upaya pemda secara spesifik dalam pengendalian pencemaran udara (baik bidang transportasi, industri, kehutanan, atau pertambangan)',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Kebijakan dalam pengelolaan sungai',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Adanya Dewan SDA di tingkat Kabupaten/Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p17',
                'question' => 'Adanya rencana kerja dan aksi pengelola sungai bersih di tingkat Kabupaten/Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p18',
                'question' => 'Adanya komunitas peduli sungai',
                'setting_id' => 1
            ],
            [
                'code' => 'p19',
                'question' => 'Keterlibatan masyarakat dalam pengelolaan sungai',
                'setting_id' => 1
            ],
            [
                'code' => 'p20',
                'question' => 'Kondisi kebersihan sungai',
                'setting_id' => 1
            ],
            [
                'code' => 'p21',
                'question' => 'Kondisi daerah sempadan sungai',
                'setting_id' => 1
            ],
            [
                'code' => 'p22',
                'question' => 'Melakukan pemantauan sungai',
                'setting_id' => 1
            ],
            [
                'code' => 'p23',
                'question' => 'Nilai Indeks Kualitas Air',
                'setting_id' => 1
            ],
            [
                'code' => 'p24',
                'question' => 'Upaya Pemerintah Daerah dalam pemenuhan Akses air minum (seperti pengembangan SPAM jaringan perpipaan dan pengembangan SPAM Bukan jaringan perpipaan)',
                'setting_id' => 1
            ],
            [
                'code' => 'p25',
                'question' => 'Memiliki Penyelenggara SPAM (BUMD/UPTD/BUMDES/POKMAS/BUKS)',
                'setting_id' => 1
            ],
            [
                'code' => 'p26',
                'question' => 'Akses terhadap air minum yang layak melalui SPAM jaringan perpipaan dan non perpipaan',
                'setting_id' => 1
            ],
            [
                'code' => 'p27',
                'question' => 'Memiliki dokumen RISPAM',
                'setting_id' => 1
            ],
            [
                'code' => 'p28',
                'question' => 'Persentase sarana air minum yang diinspeksi kualitas air minumnya',
                'setting_id' => 1
            ],
            [
                'code' => 'p29',
                'question' => 'Persentase sarana air minum yang memenuhi syarat kesehatan setelah dilakukan inspeksi kualitas airnya',
                'setting_id' => 1
            ],
            [
                'code' => 'p30',
                'question' => 'Kegiatan pengawasan internal kualitas air minum secara berkala',
                'setting_id' => 1
            ],
            [
                'code' => 'p31',
                'question' => 'Memiliki dan menerapkan rencana pengamanan kualitas air minum secara berkala (semua penyelenggara penyedia air minum)',
                'setting_id' => 1
            ],
            [
                'code' => 'p32',
                'question' => 'Keberadaan regulasi/kebijakan terkait Air Limbah Domestik (Perda Pengelolaan ALD, Perda Retribusi, dan/atau Perkada terkait Pengelolaan ALD)',
                'setting_id' => 1
            ],
            [
                'code' => 'p33',
                'question' => 'Keberadaan Dokumen Perencanaan Sistem Pengelolaan Air Limbah Domestik (Strategi Sanitasi Perkotaan dan/atau Rencana Induk Sistem Pengelolaan ALD)',
                'setting_id' => 1
            ],
            [
                'code' => 'p34',
                'question' => 'Adanya Pemisahan Peran Operator dan Regulator dalam Kelembagaan Pengelola Air Limbah Domestik (ALD)',
                'setting_id' => 1
            ],
            [
                'code' => 'p35',
                'question' => 'Persentase alokasi anggaran pengelolaan air limbah domestik dalam APBD',
                'setting_id' => 1
            ],
            [
                'code' => 'p36',
                'question' => 'Program/Kegiatan Pemda yang mendorong perubahan perilaku masyarakat (sosialisasi/kampanye)',
                'setting_id' => 1
            ],
            [
                'code' => 'p37',
                'question' => 'Capaian Akses Layak Air Limbah Domestik',
                'setting_id' => 1
            ],
            [
                'code' => 'p38',
                'question' => 'Persentase pencapaian target tahunan pemenuhan Standar Pelayanan Minimal (SPM)',
                'setting_id' => 1
            ],
            [
                'code' => 'p39',
                'question' => 'Terdapat layanan penyedotan lumpur tinja (baik oleh OPD atau Badan Usaha)',
                'setting_id' => 1
            ],
            [
                'code' => 'p40',
                'question' => 'Keberadaan dan keberfungsian Instalasi Pengolahan Lumpur Tinja (IPLT)',
                'setting_id' => 1
            ],
            [
                'code' => 'p41',
                'question' => 'Truk tinja beroperasi dan masuk ke Instalasi Pengolahan Lumpur Tinja (IPLT)',
                'setting_id' => 1
            ],
            [
                'code' => 'p42',
                'question' => 'Persentase keberfungsian (memenuhi semua baku mutu lingkungan sesuai Permen LHK No. 68 Tahun 2016) dari jumlah total Instalasi Pengolahan Air Limbah Domestik (IPALD) skala permukiman (50-20.000 jiwa) terbangun',
                'setting_id' => 1
            ],
            [
                'code' => 'p43',
                'question' => 'Perencanaan drainase memperhatikan konsep Eco-Drain yang sesuai dengan karateristik wilayah (mengunakan sumur resapan, Biopori, Kolam Retensi dll)',
                'setting_id' => 1
            ],
            [
                'code' => 'p44',
                'question' => 'Kabupaten/Kota memiliki master plan drainase kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p45',
                'question' => 'Persentase penanganan genangan kabupaten/kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p46',
                'question' => 'Upaya Pemda dalam mendorong Peran Serta Masyarakat (PSM), mitra dalam hal Operasional serta pemeliharaan sistem drainase (Kampanye menjaga kebersihan drainase, kegiatan bersih2 lingkungan di drainase serta pemeliharaan sistem drainase)',
                'setting_id' => 1
            ],
            [
                'code' => 'p47',
                'question' => 'Kondisi Saluran drainase',
                'setting_id' => 1
            ],
            [
                'code' => 'p48',
                'question' => 'Keberadaan peraturan terkait persampahan (Perda Pengelolaan Sampah, Perda Retribusi, dan/atau Perkada terkait Pengelolaan Sampah)',
                'setting_id' => 1
            ],
            [
                'code' => 'p49',
                'question' => 'Keberadaan Dokumen Perencanaan Sistem Pengelolaan Sampah (Strategi Sanitasi Perkotaan dan/atau Rencana Induk Sistem Pengelolaan Sampah)',
                'setting_id' => 1
            ],
            [
                'code' => 'p50',
                'question' => 'Adanya pemisahan peran operator dan regulator dalam kelembagaan pengelola sampah',
                'setting_id' => 1
            ],
            [
                'code' => 'p51',
                'question' => 'Presentasi alokasi anggaran pengelolaan sampah dalam APBD',
                'setting_id' => 1
            ],
            [
                'code' => 'p52',
                'question' => 'Program pemerintah dalam pengolahan sampah dengan prinsip 3R (misal komposting, bank sampah, biogas, daur ulang skala kawasan TPS 3R)',
                'setting_id' => 1
            ],
            [
                'code' => 'p53',
                'question' => 'Persentase pengurangan sampah Kabupaten Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p54',
                'question' => 'Persentase penanganan sampah Kabupaten Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p55',
                'question' => 'Pelaksanaan pemilahan sampah',
                'setting_id' => 1
            ],
            [
                'code' => 'p56',
                'question' => 'Program Pemda dalam mendorong Peran Serta Masyarakat (PSM) dalam pemilahan sampah (misal program pengurangan kantong plastik, lomba kebersihan, sosialisasi terkait pengelolaan)',
                'setting_id' => 1
            ],
            [
                'code' => 'p57',
                'question' => 'Adanya program pengelolaan sampah tingkat desa yang meliputi pemrosesan awal di tingkat rumah tangga sebelum diangkut ke TPS, adanya upaya pengolahan sampah organik menjadi kompos, memfungsikan TPS menjadi tempat daur ulang sampah rumah tangga, dan pengangkutan sampah dari TPS ke TPA secara rutin',
                'setting_id' => 1
            ],
            [
                'code' => 'p58',
                'question' => 'Sampah ditampung di TPS tidak lebih dari 24 jam',
                'setting_id' => 1
            ],
            [
                'code' => 'p59',
                'question' => 'Persentase infrastruktur pengolahan sampah berbasis masyarakat (TPS 3R dan/atau bank sampah) terbangun yang beroperasi',
                'setting_id' => 1
            ],
            [
                'code' => 'p60',
                'question' => 'Kondisi sarana pengangkutan sampah',
                'setting_id' => 1
            ],
            [
                'code' => 'p61',
                'question' => 'Keberadaan tempat pemrosesan akhir sampah (TPA)',
                'setting_id' => 1
            ],
            [
                'code' => 'p62',
                'question' => 'Upaya penutupan sampah di TPA dengan tanah secara berkala',
                'setting_id' => 1
            ],
            [
                'code' => 'p63',
                'question' => 'Keberadaan pengelolaan gas metana di TPA',
                'setting_id' => 1
            ],
            [
                'code' => 'p64',
                'question' => 'Keberadaaan dan keberfungsian Instalasi Pengolahan Lindi (IPL) di TPA',
                'setting_id' => 1
            ],
            [
                'code' => 'p65',
                'question' => 'Kondisi lingkungan di Kabupaten Kota secara umum',
                'setting_id' => 1
            ],
            [
                'code' => 'p66',
                'question' => 'Memiliki kebijakan tata ruang perumahan/pemukiman',
                'setting_id' => 1
            ],
            [
                'code' => 'p67',
                'question' => 'Keberadaan fasilitas umum seperti sarana bermain anak yang cukup',
                'setting_id' => 1
            ],
            [
                'code' => 'p68',
                'question' => 'Keberadaan sarana olah raga yang cukup',
                'setting_id' => 1
            ],
            [
                'code' => 'p69',
                'question' => 'Persentase daerah kumuh Kabupaten Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p70',
                'question' => 'Memiliki program optimalisasi Pemanfaatan Lahan Pekarangan Melalui Kawasan Rumah Pangan Lestari (KRPL)',
                'setting_id' => 1
            ],
            [
                'code' => 'p71',
                'question' => 'Kepemilikan fasilitas penanganan proteksi kebakaran (mobil damkar, pos pemadam kebakaran, hidran pilar, hidran box)',
                'setting_id' => 1
            ],
            [
                'code' => 'p72',
                'question' => 'Pelaksanaan PSN dan Jumat Bersih',
                'setting_id' => 1
            ],
            [
                'code' => 'p73',
                'question' => 'Jumlah rumah sehat di Kabupaten/Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p74',
                'question' => 'Memiliki program edukasi di wilayah pemukiman yang berpotensi radiasi secara alami (berdasarkan peta BATAN)',
                'setting_id' => 1
            ],
            [
                'code' => 'p75',
                'question' => 'Memiliki program pengawasan dan edukasi penggunaan merkuri bagi penambang emas skala kecil di wilayah Kabupaten Kota (Peta di BPPT & KLHK)',
                'setting_id' => 1
            ],
            [
                'code' => 'p76',
                'question' => 'Memiliki program perbaikan rumah sehat/bedah rumah di wilayah pemukiman',
                'setting_id' => 1
            ],
            [
                'code' => 'p77',
                'question' => 'Konndisi lingkungan perumahan umum di lingkungan permukiman bersih, tertata rapi dan bebas banjir',
                'setting_id' => 1
            ],
            [
                'code' => 'p78',
                'question' => 'Persentase kawasan RTH di wilayah kabupaten kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p79',
                'question' => 'Persentase kawasan hutan kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p80',
                'question' => 'Persentase kawasan pertamanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p81',
                'question' => 'Tersedia informasi, petunjuk, himbauan dan sarana sanitasi di kawasan pertamanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p82',
                'question' => 'Keberadaan fasilitas dan sarana di kawasan pertamanan yang ramah anak, ramah lansia dan ramah difable',
                'setting_id' => 1
            ],
            [
                'code' => 'p83',
                'question' => 'Keberadaan program kegiatan masyarakat yang memanfaatkan fasilitas dan sarana di kawasan pertamanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p84',
                'question' => 'Kebersihan kawasan pertamanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p85',
                'question' => 'Kondisi Fasilitas dan sarana di kawasan pertamanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p86',
                'question' => 'Adanya program terkait Rumah Desa Sehat',
                'setting_id' => 1
            ],
            [
                'code' => 'p87',
                'question' => 'Keberadaan kelompok kerja masyarakat air dan sanitasi yang aktif (Pokmair, BPS, BPSPAM)',
                'setting_id' => 1
            ],
            [
                'code' => 'p88',
                'question' => 'Persentase rumah ibadat 6 Agama di kabupaten kota yang terdaftar di Kantor Kementerian Agama Kab/Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p89',
                'question' => 'Jumlah rumah ibadat yang memperoleh dukungan pembinaan dari Pemerintah Daerah dan atau Kantor Kementerian Agama Kab/Kota kepada pengurus',
                'setting_id' => 1
            ],
            [
                'code' => 'p90',
                'question' => 'Adanya dukungan dari Pemerintah Daerah dan atau Kantor Kementerian Agama Kab/Kota dalam bentuk pendanaan sarana dan prasarana rumah ibadat',
                'setting_id' => 1
            ],
            [
                'code' => 'p91',
                'question' => 'Persentase Rumah Ibadat yang dilakukan Inspeksi Kesehatan Lingkungan paling sedikit satu kali dalam setahun',
                'setting_id' => 1
            ],
            [
                'code' => 'p92',
                'question' => 'Persentase rumah ibadat yang memenuhi syarat kesehatan',
                'setting_id' => 1
            ],
            [
                'code' => 'p93',
                'question' => 'Persentase rumah ibadat yang ramah lingkungan',
                'setting_id' => 1
            ],
            [
                'code' => 'p94',
                'question' => 'Persentase rumah ibadat inklusif',
                'setting_id' => 1
            ],
            [
                'code' => 'p95',
                'question' => 'Persentase rumah ibadat yang menerapkan Kawasan Tanpa Rokok (KTR)',
                'setting_id' => 1
            ],
            [
                'code' => 'p96',
                'question' => 'Jumlah rumah ibadat yang melakukan KIE PHBS',
                'setting_id' => 1
            ],
            [
                'code' => 'p97',
                'question' => 'Jumlah rumah ibadat yang memiliki sarana pelayanan kesehatan/pertolongan pertama dalam kedaruratan',
                'setting_id' => 1
            ],
            [
                'code' => 'p98',
                'question' => 'Rumah ibadat memiliki kegiatan penanganan sosial kemasyarakatan',
                'setting_id' => 1
            ],
            [
                'code' => 'p99',
                'question' => 'Persentase rumah ibadat memiliki kegiatan edukasi terkait wawasan kebangsaan',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteTwo::create($question);
        }
    }
}
