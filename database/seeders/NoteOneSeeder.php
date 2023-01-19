<?php

namespace Database\Seeders;

use App\Models\NoteOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteOneSeeder extends Seeder
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
                'question' => 'Memiliki Kebijakan Germas',
                'setting_id' => 1
            ],
            [
                'code' => 'p2',
                'question' => 'GERMAS tercantum di dalam dokumen perencanaan pembangunan daerah dan perencanaan perangkat daerah',
                'setting_id' => 1
            ],
            [
                'code' => 'p3',
                'question' => 'Jumlah penggerakan klaster GERMAS',
                'setting_id' => 1
            ],
            [
                'code' => 'p4',
                'question' => 'Pencapaian Indeks Keluarga Sehat (IKS) di Kabupaten/Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase ibu hamil mendapatkan pelayanan antenatal minimal 6 kali (K6)',
                'setting_id' => 1
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase Kunjungan Neonatal Lengkap',
                'setting_id' => 1
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase balita dipantau pertumbuhan dan perkembangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan remaja',
                'setting_id' => 1
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase puskesmas yang menyelenggarakan pelayanan kesehatan SANTUN LANSIA',
                'setting_id' => 1
            ],
            [
                'code' => 'p10',
                'question' => 'Pos Upaya Kesehatan Kerja (UKK) aktif',
                'setting_id' => 1
            ],
            [
                'code' => 'p11',
                'question' => 'Persentase ibu hamil KEK',
                'setting_id' => 1
            ],
            [
                'code' => 'p12',
                'question' => 'Prevalensi Stunting',
                'setting_id' => 1
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase bayi usia 0-6 bulan mendapatkan ASI ekslusif',
                'setting_id' => 1
            ],
            [
                'code' => 'p14',
                'question' => 'Persentase balita yang mengikuti program suplementasi kapsul vitamin A untuk anak 6-59 bulan',
                'setting_id' => 1
            ],
            [
                'code' => 'p15',
                'question' => 'Prevalensi Obesitas pada Balita',
                'setting_id' => 1
            ],
            [
                'code' => 'p16',
                'question' => 'Prevalensi Obesitas pada Anak Usia Sekolah (SD-SMA)',
                'setting_id' => 1
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase Puskesmas yang melaksanakan pelayanan kesehatan lingkungan',
                'setting_id' => 1
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase Puskesmas yang menindaklanjuti hasil konseling pelayanan kesehatan lingkungan',
                'setting_id' => 1
            ],
            [
                'code' => 'p19',
                'question' => 'Capaian target Inspeksi Kesehatan Lingkungan (IKL) TPP yang laik Higiene Sanitasi Pangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p20',
                'question' => 'Capaian target Sertifikasi Laik Higiene Sanitasi TPP',
                'setting_id' => 1
            ],
            [
                'code' => 'p21',
                'question' => 'Kejadian Keracunan Pangan dalam 2 tahun terakhir',
                'setting_id' => 1
            ],
            [
                'code' => 'p22',
                'question' => 'Penataan Sentra Pangan Jajanan',
                'setting_id' => 1
            ],
            [
                'code' => 'p23',
                'question' => 'Desa / kelurahan sehat iklim',
                'setting_id' => 1
            ],
            [
                'code' => 'p24',
                'question' => 'Persentase pemberian oralit dan zinc 100% pada balita penderita diare',
                'setting_id' => 1
            ],
            [
                'code' => 'p25',
                'question' => 'Persentase fasilitas pelayanan kesehatan mampu test dan pengobatan HIV dan Penyakit Infeksi Menular Seksual (PIMS)',
                'setting_id' => 1
            ],
            [
                'code' => 'p26',
                'question' => 'Persentase angka keberhasilan pengobatan TBC',
                'setting_id' => 1
            ],
            [
                'code' => 'p27',
                'question' => 'Persentase penderita Diabetes Melitus (DM) yang mendapatkan pelayanan kesehatan sesuai standar',
                'setting_id' => 1
            ],
            [
                'code' => 'p28',
                'question' => 'Persentase penderita Hipertensi yang mendapatkan pelayanan kesehatan sesuai standar',
                'setting_id' => 1
            ],
            [
                'code' => 'p29',
                'question' => 'Penerapan Kawasan Tanpa Rokok/KTR',
                'setting_id' => 1
            ],
            [
                'code' => 'p30',
                'question' => 'Keberadaan pelarangan iklan rokok',
                'setting_id' => 1
            ],
            [
                'code' => 'p31',
                'question' => 'Angka Bebas Jentik (ABJ)',
                'setting_id' => 1
            ],
            [
                'code' => 'p32',
                'question' => 'Indeks habitat anopheles',
                'setting_id' => 1
            ],
            [
                'code' => 'p33',
                'question' => 'Pencapaian indikator Annual Parasite Incidence (API) atau incidence malaria pada suatu daerah tertentu',
                'setting_id' => 1
            ],
            [
                'code' => 'p34',
                'question' => 'Telah menerima sertifikat eliminasi malaria',
                'setting_id' => 1
            ],
            [
                'code' => 'p35',
                'question' => 'Angka kesakitan Dengue',
                'setting_id' => 1
            ],
            [
                'code' => 'p36',
                'question' => 'Kegiatan pemberantasan sarang nyamuk (PSN) melalui Gerakan Satu Rumah Satu Jumantik',
                'setting_id' => 1
            ],
            [
                'code' => 'p37',
                'question' => 'Pencapaian indikator Gigitan Hewan Penular Rabies (GHPR) ditangani dari jumlah kasus yang dilaporkan',
                'setting_id' => 1
            ],
            [
                'code' => 'p38',
                'question' => 'Angka kematian penderita leptospirosis',
                'setting_id' => 1
            ],
            [
                'code' => 'p39',
                'question' => 'Angka Eliminasi Filariasis/kaki gajah',
                'setting_id' => 1
            ],
            [
                'code' => 'p40',
                'question' => 'Indikator Kecacingan',
                'setting_id' => 1
            ],
            [
                'code' => 'p41',
                'question' => 'Kebijakan Pemerintah Daerah dalam pencegahan dan penanggulangan penyalahgunaan Napza',
                'setting_id' => 1
            ],
            [
                'code' => 'p42',
                'question' => 'Kegiatan edukasi bahaya penyalahgunaan Napza oleh Pemerintah Daerah',
                'setting_id' => 1
            ],
            [
                'code' => 'p43',
                'question' => 'Persentase Puskesmas yang melaksanakan deteksi dini penyalahgunaan Napza',
                'setting_id' => 1
            ],
            [
                'code' => 'p44',
                'question' => 'Persentase Institusi Penerima Wajib Lapor (IPWL) yang aktif melaksanakan rehabilitasi medis Napza',
                'setting_id' => 1
            ],
            [
                'code' => 'p45',
                'question' => 'Pelaksanaan kesehatan jiwa masyarakat melalui TPKJM',
                'setting_id' => 1
            ],
            [
                'code' => 'p46',
                'question' => 'Persentase desa siaga sehat jiwa (DSSJ)',
                'setting_id' => 1
            ],
            [
                'code' => 'p47',
                'question' => 'Persentase Puskesmas yang membina kelompok asuhan mandiri kesehatan tradisional',
                'setting_id' => 1
            ],
            [
                'code' => 'p48',
                'question' => 'Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan tradisional (Akupressure/ Akupuntur/ Pijat Baduta)',
                'setting_id' => 1
            ],
            [
                'code' => 'p49',
                'question' => 'Persentase rumah sakit yang memiliki ruang terbuka hijau sebagai taman obat dan healing garden',
                'setting_id' => 1
            ],
            [
                'code' => 'p50',
                'question' => 'Persentase posyandu aktif di Kabupaten/Kota',
                'setting_id' => 1
            ],
            [
                'code' => 'p51',
                'question' => 'Persentase deteksi dini di Posbindu setiap bulan',
                'setting_id' => 1
            ],
            [
                'code' => 'p52',
                'question' => 'Persentase Posyandu Lansia aktif',
                'setting_id' => 1
            ],
            [
                'code' => 'p53',
                'question' => 'Rumah Sakit dan Puskesmas telah mengelola limbah medis sesuai standar',
                'setting_id' => 1
            ],
            [
                'code' => 'p54',
                'question' => 'Rumah sakit dan Puskesmas telah memenuhi persyaratan kesling sesuai standar IKL Rumah Sakit Puskesmas dan intervensi perbaikan',
                'setting_id' => 1
            ],
            [
                'code' => 'p55',
                'question' => 'Regulasi/Kebijakan pengelolaan limbah B3',
                'setting_id' => 1
            ],
            [
                'code' => 'p56',
                'question' => 'Tersedianya depo / tempat pengumpulan limbah B3 yang memenuhi syarat',
                'setting_id' => 1
            ],
            [
                'code' => 'p57',
                'question' => 'Melakukan pengolahan limbah B3 di Fasyankes secara mandiri atau kerjasama dengan pihak ke-3 berizin',
                'setting_id' => 1
            ],
            [
                'code' => 'p58',
                'question' => 'Rasio ketersediaan pangan terhadap kebutuhan komoditas pangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p59',
                'question' => 'Tingkat ketersediaan energi',
                'setting_id' => 1
            ],
            [
                'code' => 'p60',
                'question' => 'Penurunan jumlah penduduk rentan rawan pangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p61',
                'question' => 'Keberadaan cadangan pangan pemerintah daerah (CPPD)',
                'setting_id' => 1
            ],
            [
                'code' => 'p62',
                'question' => 'Stabilisasi harga di tingkat konsumen',
                'setting_id' => 1
            ],
            [
                'code' => 'p63',
                'question' => 'Skor Pola Pangan Harapan (PPH) berdasarkan Angka Kecukupan Energi (AKE) 2100 Kkal/kap/hari',
                'setting_id' => 1
            ],
            [
                'code' => 'p64',
                'question' => 'Program Food Loss dan Food Waste',
                'setting_id' => 1
            ],
            [
                'code' => 'p65',
                'question' => 'Penanganan diversifikasi pangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p66',
                'question' => 'Adanya pengawasan keamanan pangan',
                'setting_id' => 1
            ],
            [
                'code' => 'p67',
                'question' => 'Keberadaan penyuluhan pengendalian hama terpadu, penggunaan pestisida dan pertanian organik oleh pemerintah',
                'setting_id' => 1
            ],
            [
                'code' => 'p68',
                'question' => 'Jaminan keamanan pangan yang beredar (pre-market)',
                'setting_id' => 1
            ]
        ];

        foreach ($questions as $question) {
            NoteOne::create($question);
        }
    }
}
