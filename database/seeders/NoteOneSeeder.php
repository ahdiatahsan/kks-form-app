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
                'question' => 'Memiliki Kebijakan Germas'
            ],
            [
                'code' => 'p2',
                'question' => 'GERMAS tercantum di dalam dokumen perencanaan pembangunan daerah dan perencanaan perangkat daerah'
            ],
            [
                'code' => 'p3',
                'question' => 'Jumlah penggerakan klaster GERMAS'
            ],
            [
                'code' => 'p4',
                'question' => 'Pencapaian Indeks Keluarga Sehat (IKS) di Kabupaten/Kota'
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase ibu hamil mendapatkan pelayanan antenatal minimal 6 kali (K6)'
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase Kunjungan Neonatal Lengkap'
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase balita dipantau pertumbuhan dan perkembangan'
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan remaja'
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase puskesmas yang menyelenggarakan pelayanan kesehatan SANTUN LANSIA'
            ],
            [
                'code' => 'p10',
                'question' => 'Pos Upaya Kesehatan Kerja (UKK) aktif'
            ],
            [
                'code' => 'p11',
                'question' => 'Persentase ibu hamil KEK'
            ],
            [
                'code' => 'p12',
                'question' => 'Prevalensi Stunting'
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase bayi usia 0-6 bulan mendapatkan ASI ekslusif'
            ],
            [
                'code' => 'p14',
                'question' => 'Persentase balita yang mengikuti program suplementasi kapsul vitamin A untuk anak 6-59 bulan'
            ],
            [
                'code' => 'p15',
                'question' => 'Prevalensi Obesitas pada Balita'
            ],
            [
                'code' => 'p16',
                'question' => 'Prevalensi Obesitas pada Anak Usia Sekolah (SD-SMA)'
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase Puskesmas yang melaksanakan pelayanan kesehatan lingkungan'
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase Puskesmas yang menindaklanjuti hasil konseling pelayanan kesehatan lingkungan'
            ],
            [
                'code' => 'p19',
                'question' => 'Capaian target Inspeksi Kesehatan Lingkungan (IKL) TPP yang laik Higiene Sanitasi Pangan'
            ],
            [
                'code' => 'p20',
                'question' => 'Capaian target Sertifikasi Laik Higiene Sanitasi TPP'
            ],
            [
                'code' => 'p21',
                'question' => 'Kejadian Keracunan Pangan dalam 2 tahun terakhir'
            ],
            [
                'code' => 'p22',
                'question' => 'Penataan Sentra Pangan Jajanan'
            ],
            [
                'code' => 'p23',
                'question' => 'Desa / kelurahan sehat iklim'
            ],
            [
                'code' => 'p24',
                'question' => 'Persentase pemberian oralit dan zinc 100% pada balita penderita diare'
            ],
            [
                'code' => 'p25',
                'question' => 'Persentase fasilitas pelayanan kesehatan mampu test dan pengobatan HIV dan Penyakit Infeksi Menular Seksual (PIMS)'
            ],
            [
                'code' => 'p26',
                'question' => 'Persentase angka keberhasilan pengobatan TBC'
            ],
            [
                'code' => 'p27',
                'question' => 'Persentase penderita Diabetes Melitus (DM) yang mendapatkan pelayanan kesehatan sesuai standar'
            ],
            [
                'code' => 'p28',
                'question' => 'Persentase penderita Hipertensi yang mendapatkan pelayanan kesehatan sesuai standar'
            ],
            [
                'code' => 'p29',
                'question' => 'Penerapan Kawasan Tanpa Rokok/KTR'
            ],
            [
                'code' => 'p30',
                'question' => 'Keberadaan pelarangan iklan rokok'
            ],
            [
                'code' => 'p31',
                'question' => 'Angka Bebas Jentik (ABJ)'
            ],
            [
                'code' => 'p32',
                'question' => 'Indeks habitat anopheles'
            ],
            [
                'code' => 'p33',
                'question' => 'Pencapaian indikator Annual Parasite Incidence (API) atau incidence malaria pada suatu daerah tertentu'
            ],
            [
                'code' => 'p34',
                'question' => 'Telah menerima sertifikat eliminasi malaria'
            ],
            [
                'code' => 'p35',
                'question' => 'Angka kesakitan Dengue'
            ],
            [
                'code' => 'p36',
                'question' => 'Kegiatan pemberantasan sarang nyamuk (PSN) melalui Gerakan Satu Rumah Satu Jumantik'
            ],
            [
                'code' => 'p37',
                'question' => 'Pencapaian indikator Gigitan Hewan Penular Rabies (GHPR) ditangani dari jumlah kasus yang dilaporkan'
            ],
            [
                'code' => 'p38',
                'question' => 'Angka kematian penderita leptospirosis'
            ],
            [
                'code' => 'p39',
                'question' => 'Angka Eliminasi Filariasis/kaki gajah'
            ],
            [
                'code' => 'p40',
                'question' => 'Indikator Kecacingan'
            ],
            [
                'code' => 'p41',
                'question' => 'Kebijakan Pemerintah Daerah dalam pencegahan dan penanggulangan penyalahgunaan Napza'
            ],
            [
                'code' => 'p42',
                'question' => 'Kegiatan edukasi bahaya penyalahgunaan Napza oleh Pemerintah Daerah'
            ],
            [
                'code' => 'p43',
                'question' => 'Persentase Puskesmas yang melaksanakan deteksi dini penyalahgunaan Napza'
            ],
            [
                'code' => 'p44',
                'question' => 'Persentase Institusi Penerima Wajib Lapor (IPWL) yang aktif melaksanakan rehabilitasi medis Napza'
            ],
            [
                'code' => 'p45',
                'question' => 'Pelaksanaan kesehatan jiwa masyarakat melalui TPKJM'
            ],
            [
                'code' => 'p46',
                'question' => 'Persentase desa siaga sehat jiwa (DSSJ)'
            ],
            [
                'code' => 'p47',
                'question' => 'Persentase Puskesmas yang membina kelompok asuhan mandiri kesehatan tradisional'
            ],
            [
                'code' => 'p48',
                'question' => 'Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan tradisional (Akupressure/ Akupuntur/ Pijat Baduta)'
            ],
            [
                'code' => 'p49',
                'question' => 'Persentase rumah sakit yang memiliki ruang terbuka hijau sebagai taman obat dan healing garden'
            ],
            [
                'code' => 'p50',
                'question' => 'Persentase posyandu aktif di Kabupaten/Kota'
            ],
            [
                'code' => 'p51',
                'question' => 'Persentase deteksi dini di Posbindu setiap bulan'
            ],
            [
                'code' => 'p52',
                'question' => 'Persentase Posyandu Lansia aktif'
            ],
            [
                'code' => 'p53',
                'question' => 'Rumah Sakit dan Puskesmas telah mengelola limbah medis sesuai standar'
            ],
            [
                'code' => 'p54',
                'question' => 'Rumah sakit dan Puskesmas telah memenuhi persyaratan kesling sesuai standar IKL Rumah Sakit Puskesmas dan intervensi perbaikan'
            ],
            [
                'code' => 'p55',
                'question' => 'Regulasi/Kebijakan pengelolaan limbah B3'
            ],
            [
                'code' => 'p56',
                'question' => 'Tersedianya depo / tempat pengumpulan limbah B3 yang memenuhi syarat'
            ],
            [
                'code' => 'p57',
                'question' => 'Melakukan pengolahan limbah B3 di Fasyankes secara mandiri atau kerjasama dengan pihak ke-3 berizin'
            ],
            [
                'code' => 'p58',
                'question' => 'Rasio ketersediaan pangan terhadap kebutuhan komoditas pangan'
            ],
            [
                'code' => 'p59',
                'question' => 'Tingkat ketersediaan energi'
            ],
            [
                'code' => 'p60',
                'question' => 'Penurunan jumlah penduduk rentan rawan pangan'
            ],
            [
                'code' => 'p61',
                'question' => 'Keberadaan cadangan pangan pemerintah daerah (CPPD)'
            ],
            [
                'code' => 'p62',
                'question' => 'Stabilisasi harga di tingkat konsumen'
            ],
            [
                'code' => 'p63',
                'question' => 'Skor Pola Pangan Harapan (PPH) berdasarkan Angka Kecukupan Energi (AKE) 2100 Kkal/kap/hari'
            ],
            [
                'code' => 'p64',
                'question' => 'Program Food Loss dan Food Waste'
            ],
            [
                'code' => 'p65',
                'question' => 'Penanganan diversifikasi pangan'
            ],
            [
                'code' => 'p66',
                'question' => 'Adanya pengawasan keamanan pangan'
            ],
            [
                'code' => 'p67',
                'question' => 'Keberadaan penyuluhan pengendalian hama terpadu, penggunaan pestisida dan pertanian organik oleh pemerintah'
            ],
            [
                'code' => 'p68',
                'question' => 'Jaminan keamanan pangan yang beredar (pre-market)'
            ]
        ];

        foreach ($questions as $question) {
            NoteOne::create($question);
        }
    }
}
