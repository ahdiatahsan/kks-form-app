<?php

namespace App\Http\Controllers;

use App\Models\AttachmentEight;
use App\Models\AttachmentEightNd;
use App\Models\AttachmentFive;
use App\Models\AttachmentFiveNd;
use App\Models\AttachmentFour;
use App\Models\AttachmentFourNd;
use App\Models\AttachmentNine;
use App\Models\AttachmentNineNd;
use App\Models\AttachmentOne;
use App\Models\AttachmentOneNd;
use App\Models\AttachmentSeven;
use App\Models\AttachmentSevenNd;
use App\Models\AttachmentSix;
use App\Models\AttachmentSixNd;
use App\Models\AttachmentThree;
use App\Models\AttachmentThreeNd;
use App\Models\AttachmentTwo;
use App\Models\AttachmentTwoNd;
use App\Models\NoteEight;
use App\Models\NoteFive;
use App\Models\NoteFour;
use App\Models\NoteNine;
use App\Models\NoteOne;
use App\Models\NoteSeven;
use App\Models\NoteSix;
use App\Models\NoteThree;
use App\Models\NoteTwo;
use App\Models\Setting;
use App\Models\TatananEight;
use App\Models\TatananFive;
use App\Models\TatananFour;
use App\Models\TatananNine;
use App\Models\TatananOne;
use App\Models\TatananSeven;
use App\Models\TatananSix;
use App\Models\TatananThree;
use App\Models\TatananTwo;
// use App\Http\Requests\StoreSettingRequest;
// use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:setting-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:setting-create'])->only(['create', 'store']);
        $this->middleware(['permission:setting-update'])->only(['edit', 'update']);
        $this->middleware(['permission:setting-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.setting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'period' => 'required|string|unique:settings,period'
        ], [
            'period.unique' => 'Tahun periode telah ada sebelumnya'
        ]);

        $newSetting = Setting::create([
            'period' => $request->input('period')
        ]);

        //generates new tatanan and attachment records with newly created period
        $newTatanans = [
            [
                'user_id' => 1,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 2,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 3,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 4,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 5,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 6,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 7,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 8,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 9,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 10,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 11,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 12,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 13,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 14,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 15,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 16,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 17,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 18,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 19,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 20,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 21,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 22,
                'setting_id' => $newSetting->id
            ],
            [
                'user_id' => 23,
                'setting_id' => $newSetting->id
            ],
        ];

        foreach($newTatanans as $newTatanan){
            AttachmentOne::create($newTatanan);
            AttachmentTwo::create($newTatanan);
            AttachmentThree::create($newTatanan);
            AttachmentFour::create($newTatanan);
            AttachmentFive::create($newTatanan);
            AttachmentSix::create($newTatanan);
            AttachmentSeven::create($newTatanan);
            AttachmentEight::create($newTatanan);
            AttachmentNine::create($newTatanan);

            AttachmentOneNd::create($newTatanan);
            AttachmentTwoNd::create($newTatanan);
            AttachmentThreeNd::create($newTatanan);
            AttachmentFourNd::create($newTatanan);
            AttachmentFiveNd::create($newTatanan);
            AttachmentSixNd::create($newTatanan);
            AttachmentSevenNd::create($newTatanan);
            AttachmentEightNd::create($newTatanan);
            AttachmentNineNd::create($newTatanan);

            TatananOne::create($newTatanan);
            TatananTwo::create($newTatanan);
            TatananThree::create($newTatanan);
            TatananFour::create($newTatanan);
            TatananFive::create($newTatanan);
            TatananSix::create($newTatanan);
            TatananSeven::create($newTatanan);
            TatananEight::create($newTatanan);
            TatananNine::create($newTatanan);
        }

        //generates new note records with newly created period
        /* note one */
        $noteOnes = [
            [
                'code' => 'p1',
                'question' => 'Memiliki Kebijakan Germas',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'GERMAS tercantum di dalam dokumen perencanaan pembangunan daerah dan perencanaan perangkat daerah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Jumlah penggerakan klaster GERMAS',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Pencapaian Indeks Keluarga Sehat (IKS) di Kabupaten/Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase ibu hamil mendapatkan pelayanan antenatal minimal 6 kali (K6)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase Kunjungan Neonatal Lengkap',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase balita dipantau pertumbuhan dan perkembangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan remaja',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase puskesmas yang menyelenggarakan pelayanan kesehatan SANTUN LANSIA',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Pos Upaya Kesehatan Kerja (UKK) aktif',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Persentase ibu hamil KEK',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Prevalensi Stunting',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase bayi usia 0-6 bulan mendapatkan ASI ekslusif',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Persentase balita yang mengikuti program suplementasi kapsul vitamin A untuk anak 6-59 bulan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Prevalensi Obesitas pada Balita',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Prevalensi Obesitas pada Anak Usia Sekolah (SD-SMA)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase Puskesmas yang melaksanakan pelayanan kesehatan lingkungan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase Puskesmas yang menindaklanjuti hasil konseling pelayanan kesehatan lingkungan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Capaian target Inspeksi Kesehatan Lingkungan (IKL) TPP yang laik Higiene Sanitasi Pangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Capaian target Sertifikasi Laik Higiene Sanitasi TPP',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Kejadian Keracunan Pangan dalam 2 tahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p22',
                'question' => 'Penataan Sentra Pangan Jajanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p23',
                'question' => 'Desa / kelurahan sehat iklim',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p24',
                'question' => 'Persentase pemberian oralit dan zinc 100% pada balita penderita diare',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p25',
                'question' => 'Persentase fasilitas pelayanan kesehatan mampu test dan pengobatan HIV dan Penyakit Infeksi Menular Seksual (PIMS)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p26',
                'question' => 'Persentase angka keberhasilan pengobatan TBC',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p27',
                'question' => 'Persentase penderita Diabetes Melitus (DM) yang mendapatkan pelayanan kesehatan sesuai standar',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p28',
                'question' => 'Persentase penderita Hipertensi yang mendapatkan pelayanan kesehatan sesuai standar',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p29',
                'question' => 'Penerapan Kawasan Tanpa Rokok/KTR',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p30',
                'question' => 'Keberadaan pelarangan iklan rokok',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p31',
                'question' => 'Angka Bebas Jentik (ABJ)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p32',
                'question' => 'Indeks habitat anopheles',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p33',
                'question' => 'Pencapaian indikator Annual Parasite Incidence (API) atau incidence malaria pada suatu daerah tertentu',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p34',
                'question' => 'Telah menerima sertifikat eliminasi malaria',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p35',
                'question' => 'Angka kesakitan Dengue',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p36',
                'question' => 'Kegiatan pemberantasan sarang nyamuk (PSN) melalui Gerakan Satu Rumah Satu Jumantik',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p37',
                'question' => 'Pencapaian indikator Gigitan Hewan Penular Rabies (GHPR) ditangani dari jumlah kasus yang dilaporkan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p38',
                'question' => 'Angka kematian penderita leptospirosis',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p39',
                'question' => 'Angka Eliminasi Filariasis/kaki gajah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p40',
                'question' => 'Indikator Kecacingan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p41',
                'question' => 'Kebijakan Pemerintah Daerah dalam pencegahan dan penanggulangan penyalahgunaan Napza',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p42',
                'question' => 'Kegiatan edukasi bahaya penyalahgunaan Napza oleh Pemerintah Daerah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p43',
                'question' => 'Persentase Puskesmas yang melaksanakan deteksi dini penyalahgunaan Napza',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p44',
                'question' => 'Persentase Institusi Penerima Wajib Lapor (IPWL) yang aktif melaksanakan rehabilitasi medis Napza',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p45',
                'question' => 'Pelaksanaan kesehatan jiwa masyarakat melalui TPKJM',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p46',
                'question' => 'Persentase desa siaga sehat jiwa (DSSJ)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p47',
                'question' => 'Persentase Puskesmas yang membina kelompok asuhan mandiri kesehatan tradisional',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p48',
                'question' => 'Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan tradisional (Akupressure/ Akupuntur/ Pijat Baduta)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p49',
                'question' => 'Persentase rumah sakit yang memiliki ruang terbuka hijau sebagai taman obat dan healing garden',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p50',
                'question' => 'Persentase posyandu aktif di Kabupaten/Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p51',
                'question' => 'Persentase deteksi dini di Posbindu setiap bulan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p52',
                'question' => 'Persentase Posyandu Lansia aktif',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p53',
                'question' => 'Rumah Sakit dan Puskesmas telah mengelola limbah medis sesuai standar',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p54',
                'question' => 'Rumah sakit dan Puskesmas telah memenuhi persyaratan kesling sesuai standar IKL Rumah Sakit Puskesmas dan intervensi perbaikan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p55',
                'question' => 'Regulasi/Kebijakan pengelolaan limbah B3',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p56',
                'question' => 'Tersedianya depo / tempat pengumpulan limbah B3 yang memenuhi syarat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p57',
                'question' => 'Melakukan pengolahan limbah B3 di Fasyankes secara mandiri atau kerjasama dengan pihak ke-3 berizin',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p58',
                'question' => 'Rasio ketersediaan pangan terhadap kebutuhan komoditas pangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p59',
                'question' => 'Tingkat ketersediaan energi',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p60',
                'question' => 'Penurunan jumlah penduduk rentan rawan pangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p61',
                'question' => 'Keberadaan cadangan pangan pemerintah daerah (CPPD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p62',
                'question' => 'Stabilisasi harga di tingkat konsumen',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p63',
                'question' => 'Skor Pola Pangan Harapan (PPH) berdasarkan Angka Kecukupan Energi (AKE) 2100 Kkal/kap/hari',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p64',
                'question' => 'Program Food Loss dan Food Waste',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p65',
                'question' => 'Penanganan diversifikasi pangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p66',
                'question' => 'Adanya pengawasan keamanan pangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p67',
                'question' => 'Keberadaan penyuluhan pengendalian hama terpadu, penggunaan pestisida dan pertanian organik oleh pemerintah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p68',
                'question' => 'Jaminan keamanan pangan yang beredar (pre-market)',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteOnes as $noteOne) {
            NoteOne::create($noteOne);
        }

        /* note two */
        $noteTwos = [
            [
                'code' => 'p1',
                'question' => 'Adanya regulasi pelaksanaan program pengendalian pencemaran kualitas udara',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Adanya program pengendalian pencemaran kualitas udara di dalam dokumen erencanaan8',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya regulasi/kebijakan terkait pelaksanaan car free day',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Pelaksanaan car free day',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Adanya upaya pemerintah daerah dalam mengkampanyekan penggunaan bahan bakar ramah lingkungan (BBM rendah sulfur termasuk Bahan Bakar Gas/BBG, kendaraan berbahan listrik/solar sel, biodiesel, dll.) untuk transportasi publik dan / atau mobil pribadi dan/ atau industri',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Jumlah rumah tangga yang menggunakan salah satu atau beberapa energi alternatif yang ramah lingkungan: solar sel, LPG dan pemanfaatan gas metan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Kampanye wajib tanam pohon bagi masyarakat yang dilakukan secara terencana dan bersinergi, baik melalui Surat edaran, Surat Keputusan, bilboard, leaflet, brosur, media cetak, atau elektronik',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase desa/kelurahan yang melaksanakan kegiatan wajib tanam pohon',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Melakukan pemantauan kualitas udara untuk menghitung Indeks Standar Pencemaran Udara/ISPU',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Nilai hasil pengukuran ISPU',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Nilai indeks kualitas udara',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Melakukan monitoring uji kualitas udara indoor secara berkala',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Melakukan edukasi dan diseminasi informasi kualitas udara ke masyarakat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Upaya-upaya pemda secara spesifik dalam pengendalian pencemaran udara (baik bidang transportasi, industri, kehutanan, atau pertambangan)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Kebijakan dalam pengelolaan sungai',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Adanya Dewan SDA di tingkat Kabupaten/Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Adanya rencana kerja dan aksi pengelola sungai bersih di tingkat Kabupaten/Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Adanya komunitas peduli sungai',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Keterlibatan masyarakat dalam pengelolaan sungai',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Kondisi kebersihan sungai',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Kondisi daerah sempadan sungai',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p22',
                'question' => 'Melakukan pemantauan sungai',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p23',
                'question' => 'Nilai Indeks Kualitas Air',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p24',
                'question' => 'Upaya Pemerintah Daerah dalam pemenuhan Akses air minum (seperti pengembangan SPAM jaringan perpipaan dan pengembangan SPAM Bukan jaringan perpipaan)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p25',
                'question' => 'Memiliki Penyelenggara SPAM (BUMD/UPTD/BUMDES/POKMAS/BUKS)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p26',
                'question' => 'Akses terhadap air minum yang layak melalui SPAM jaringan perpipaan dan non perpipaan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p27',
                'question' => 'Memiliki dokumen RISPAM',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p28',
                'question' => 'Persentase sarana air minum yang diinspeksi kualitas air minumnya',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p29',
                'question' => 'Persentase sarana air minum yang memenuhi syarat kesehatan setelah dilakukan inspeksi kualitas airnya',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p30',
                'question' => 'Kegiatan pengawasan internal kualitas air minum secara berkala',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p31',
                'question' => 'Memiliki dan menerapkan rencana pengamanan kualitas air minum secara berkala (semua penyelenggara penyedia air minum)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p32',
                'question' => 'Keberadaan regulasi/kebijakan terkait Air Limbah Domestik (Perda Pengelolaan ALD, Perda Retribusi, dan/atau Perkada terkait Pengelolaan ALD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p33',
                'question' => 'Keberadaan Dokumen Perencanaan Sistem Pengelolaan Air Limbah Domestik (Strategi Sanitasi Perkotaan dan/atau Rencana Induk Sistem Pengelolaan ALD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p34',
                'question' => 'Adanya Pemisahan Peran Operator dan Regulator dalam Kelembagaan Pengelola Air Limbah Domestik (ALD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p35',
                'question' => 'Persentase alokasi anggaran pengelolaan air limbah domestik dalam APBD',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p36',
                'question' => 'Program/Kegiatan Pemda yang mendorong perubahan perilaku masyarakat (sosialisasi/kampanye)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p37',
                'question' => 'Capaian Akses Layak Air Limbah Domestik',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p38',
                'question' => 'Persentase pencapaian target tahunan pemenuhan Standar Pelayanan Minimal (SPM)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p39',
                'question' => 'Terdapat layanan penyedotan lumpur tinja (baik oleh OPD atau Badan Usaha)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p40',
                'question' => 'Keberadaan dan keberfungsian Instalasi Pengolahan Lumpur Tinja (IPLT)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p41',
                'question' => 'Truk tinja beroperasi dan masuk ke Instalasi Pengolahan Lumpur Tinja (IPLT)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p42',
                'question' => 'Persentase keberfungsian (memenuhi semua baku mutu lingkungan sesuai Permen LHK No. 68 Tahun 2016) dari jumlah total Instalasi Pengolahan Air Limbah Domestik (IPALD) skala permukiman (50-20.000 jiwa) terbangun',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p43',
                'question' => 'Perencanaan drainase memperhatikan konsep Eco-Drain yang sesuai dengan karateristik wilayah (mengunakan sumur resapan, Biopori, Kolam Retensi dll)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p44',
                'question' => 'Kabupaten/Kota memiliki master plan drainase kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p45',
                'question' => 'Persentase penanganan genangan kabupaten/kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p46',
                'question' => 'Upaya Pemda dalam mendorong Peran Serta Masyarakat (PSM), mitra dalam hal Operasional serta pemeliharaan sistem drainase (Kampanye menjaga kebersihan drainase, kegiatan bersih2 lingkungan di drainase serta pemeliharaan sistem drainase)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p47',
                'question' => 'Kondisi Saluran drainase',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p48',
                'question' => 'Keberadaan peraturan terkait persampahan (Perda Pengelolaan Sampah, Perda Retribusi, dan/atau Perkada terkait Pengelolaan Sampah)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p49',
                'question' => 'Keberadaan Dokumen Perencanaan Sistem Pengelolaan Sampah (Strategi Sanitasi Perkotaan dan/atau Rencana Induk Sistem Pengelolaan Sampah)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p50',
                'question' => 'Adanya pemisahan peran operator dan regulator dalam kelembagaan pengelola sampah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p51',
                'question' => 'Presentasi alokasi anggaran pengelolaan sampah dalam APBD',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p52',
                'question' => 'Program pemerintah dalam pengolahan sampah dengan prinsip 3R (misal komposting, bank sampah, biogas, daur ulang skala kawasan TPS 3R)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p53',
                'question' => 'Persentase pengurangan sampah Kabupaten Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p54',
                'question' => 'Persentase penanganan sampah Kabupaten Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p55',
                'question' => 'Pelaksanaan pemilahan sampah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p56',
                'question' => 'Program Pemda dalam mendorong Peran Serta Masyarakat (PSM) dalam pemilahan sampah (misal program pengurangan kantong plastik, lomba kebersihan, sosialisasi terkait pengelolaan)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p57',
                'question' => 'Adanya program pengelolaan sampah tingkat desa yang meliputi pemrosesan awal di tingkat rumah tangga sebelum diangkut ke TPS, adanya upaya pengolahan sampah organik menjadi kompos, memfungsikan TPS menjadi tempat daur ulang sampah rumah tangga, dan pengangkutan sampah dari TPS ke TPA secara rutin',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p58',
                'question' => 'Sampah ditampung di TPS tidak lebih dari 24 jam',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p59',
                'question' => 'Persentase infrastruktur pengolahan sampah berbasis masyarakat (TPS 3R dan/atau bank sampah) terbangun yang beroperasi',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p60',
                'question' => 'Kondisi sarana pengangkutan sampah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p61',
                'question' => 'Keberadaan tempat pemrosesan akhir sampah (TPA)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p62',
                'question' => 'Upaya penutupan sampah di TPA dengan tanah secara berkala',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p63',
                'question' => 'Keberadaan pengelolaan gas metana di TPA',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p64',
                'question' => 'Keberadaaan dan keberfungsian Instalasi Pengolahan Lindi (IPL) di TPA',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p65',
                'question' => 'Kondisi lingkungan di Kabupaten Kota secara umum',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p66',
                'question' => 'Memiliki kebijakan tata ruang perumahan/pemukiman',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p67',
                'question' => 'Keberadaan fasilitas umum seperti sarana bermain anak yang cukup',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p68',
                'question' => 'Keberadaan sarana olah raga yang cukup',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p69',
                'question' => 'Persentase daerah kumuh Kabupaten Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p70',
                'question' => 'Memiliki program optimalisasi Pemanfaatan Lahan Pekarangan Melalui Kawasan Rumah Pangan Lestari (KRPL)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p71',
                'question' => 'Kepemilikan fasilitas penanganan proteksi kebakaran (mobil damkar, pos pemadam kebakaran, hidran pilar, hidran box)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p72',
                'question' => 'Pelaksanaan PSN dan Jumat Bersih',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p73',
                'question' => 'Jumlah rumah sehat di Kabupaten/Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p74',
                'question' => 'Memiliki program edukasi di wilayah pemukiman yang berpotensi radiasi secara alami (berdasarkan peta BATAN)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p75',
                'question' => 'Memiliki program pengawasan dan edukasi penggunaan merkuri bagi penambang emas skala kecil di wilayah Kabupaten Kota (Peta di BPPT & KLHK)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p76',
                'question' => 'Memiliki program perbaikan rumah sehat/bedah rumah di wilayah pemukiman',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p77',
                'question' => 'Konndisi lingkungan perumahan umum di lingkungan permukiman bersih, tertata rapi dan bebas banjir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p78',
                'question' => 'Persentase kawasan RTH di wilayah kabupaten kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p79',
                'question' => 'Persentase kawasan hutan kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p80',
                'question' => 'Persentase kawasan pertamanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p81',
                'question' => 'Tersedia informasi, petunjuk, himbauan dan sarana sanitasi di kawasan pertamanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p82',
                'question' => 'Keberadaan fasilitas dan sarana di kawasan pertamanan yang ramah anak, ramah lansia dan ramah difable',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p83',
                'question' => 'Keberadaan program kegiatan masyarakat yang memanfaatkan fasilitas dan sarana di kawasan pertamanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p84',
                'question' => 'Kebersihan kawasan pertamanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p85',
                'question' => 'Kondisi Fasilitas dan sarana di kawasan pertamanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p86',
                'question' => 'Adanya program terkait Rumah Desa Sehat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p87',
                'question' => 'Keberadaan kelompok kerja masyarakat air dan sanitasi yang aktif (Pokmair, BPS, BPSPAM)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p88',
                'question' => 'Persentase rumah ibadat 6 Agama di kabupaten kota yang terdaftar di Kantor Kementerian Agama Kab/Kota',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p89',
                'question' => 'Jumlah rumah ibadat yang memperoleh dukungan pembinaan dari Pemerintah Daerah dan atau Kantor Kementerian Agama Kab/Kota kepada pengurus',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p90',
                'question' => 'Adanya dukungan dari Pemerintah Daerah dan atau Kantor Kementerian Agama Kab/Kota dalam bentuk pendanaan sarana dan prasarana rumah ibadat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p91',
                'question' => 'Persentase Rumah Ibadat yang dilakukan Inspeksi Kesehatan Lingkungan paling sedikit satu kali dalam setahun',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p92',
                'question' => 'Persentase rumah ibadat yang memenuhi syarat kesehatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p93',
                'question' => 'Persentase rumah ibadat yang ramah lingkungan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p94',
                'question' => 'Persentase rumah ibadat inklusif',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p95',
                'question' => 'Persentase rumah ibadat yang menerapkan Kawasan Tanpa Rokok (KTR)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p96',
                'question' => 'Jumlah rumah ibadat yang melakukan KIE PHBS',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p97',
                'question' => 'Jumlah rumah ibadat yang memiliki sarana pelayanan kesehatan/pertolongan pertama dalam kedaruratan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p98',
                'question' => 'Rumah ibadat memiliki kegiatan penanganan sosial kemasyarakatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p99',
                'question' => 'Persentase rumah ibadat memiliki kegiatan edukasi terkait wawasan kebangsaan',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteTwos as $noteTwo) {
            NoteTwo::create($noteTwo);
        }

        /* note three */
        $noteThrees = [
            [
                'code' => 'p1',
                'question' => 'Keberadaan regulasi daerah tentang pasar sehat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Keberadaan regulasi penanganan PKL',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Keberadaan program yang mendukung terkait Pasar Sehat dalam dokumen perencanaan daerah (RPJMD, RKPD, Renstra PD dan Renja PD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Persentase pasar yang memiliki Pokja dan aktif (memiliki rencana kerja dan terealisasi)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase pasar yang memenuhi syarat sesuai IKL',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase pasar yang melakukan pengawasan internal',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Komunikasi, Informasi dan Edukasi (KIE) kepada masyarakat pasar',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase pasar yang memiliki fasilitas ruang laktasi',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase pasar yang memiliki fasilitas ruang Kesehatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Adanya pengaturan dan penataan pedagang kaki lima (PKL)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Persentase pasar yang menerapkan K3',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase pasar yang menjual daging berasal dari RPH/distributor yang memiliki NKV',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase pasar yang menjual daging unggas berasal dari RPA/RPU yang memiliki NKV',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Persentase pasar yang menjual unggas hidup di dalam pasar',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Persentase pasar yang memiliki infrastruktur yang ramah untuk kaum difabel',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Persentase pasar yang menerapkan pengelolaan sampah dengan prinsip 3R (reduce, reuse, dan recyle)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase pasar yang menerapkan pengelolaan air limbah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase pasar yang melakukan kegiatan kemitraan dengan berbagai pihak diluar manajemen pasar (instansi pemerintah lain, bank, media, perguruan tinggi dan perusahaan swasta lainnya) yang dilakukan secara rutin dalam rangka mewujudkan pasar sehat',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteThrees as $noteThree) {
            NoteThree::create($noteThree);
        }

        /* note four */
        $noteFours = [
            [
                'code' => 'p1',
                'question' => 'Keberadaan regulasi daerah tentang pelaksanaan program UKS/M',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Keberadaan program UKS/M dalam perencanaan daerah (RPJMD, RKPD, Renstra PD dan Renja PD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Keberadaan Tim Pembina UKS/M',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Keberadaan rapat koordinasi (rakor) Tim Pembina UKS/M yang dilakukan secara rutin',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Presentase Sekolah/Madrasah yang memiliki tim pelaksana UKS/M dibuktikan dengan SK',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase sekolah yang menerapkan stratifikasi standar UKS/M',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase Sekolah/Madrasah yang memenuhi syarat sesuai IKL',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase sekolah/madrasah yang melakukan pengawasan internal',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Persentase sekolah yang menerapkan Satuan Pendidikan Ramah Anak',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Tersedianya sekolah yang menerapkan pendidikan inklusif',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Presentase sekolah yang menerapkan Adiwiyata',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Presentase Pondok Pesantren menerapkan Pondok Pesantren Sehat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Presentase sekolah pendidikan usia dini/PAUD yang menyelenggarakan promosi kesehatan dan penjaringan kesehatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Jumlah sekolah yang menerapkan model pembelajaran sekolah sehat, contoh: sekolah menjadi pusat pembelajaran sekolah sehat, dll.',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Keberadaan sekolah yang mengembangkan sistem informasi terintegrasi (contoh: data peserta didik, data kesehatan, data kondisi kesehatan lingkungan sekolah, dll.)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Adanya kegiatan kemitraan sekolah dengan pihak luar untuk mencapai sekolah sehat',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteFours as $noteFour) {
            NoteFour::create($noteFour);
        }

        /* note five */
        $noteFives = [
            [
                'code' => 'p1',
                'question' => 'Keberadaan regulasi daerah tentang Pariwisata Sehat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'RIPPARDA masuk dalam RPJMD/Renstra/RKPD',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya desa wisata yang dikelola oleh Lembaga Pemasyarakatan Masyarakat Desa (LPMD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Tersedianya informasi pariwisata di tempat umum (hotel, bandara/pelabuhan, dll)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase sarana akomodasi pariwisata yang laik sehat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase restoran yang laik hygiene',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase DTW yang memenuhi syarat kesehatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Jumlah DTW yang mengimplementasi kawasan tanpa rokok (KTR)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Memiliki sarana transportasi yang layak',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase DTW yang ramah difabel',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'DTW menyediakan asuransi keselamatan bagi wisatawan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase DTW yang menerapkan K3',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Adanya kasus kecelakaan di daya tarik wisata',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Adanya kerjasama dengan Petugas Keamanan (Polisi Pariwisata, Satpam/Masyarakat yang ditunjuk)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Keberadaan DTW yang menyediakan fasilitas pelayanan kesehatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Keberadaan DTW yang melaksanakan program ramah lingkungan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Keberadaan rencana kerja dan implementasi program pengembangan Kelompok Sadar Wisata (Pokdarwis, Bumdes)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Keberadaan Pokdarwis, Bumdes',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Dinas pariwisata mengalokasikan program pemberdayaan masyrakat di destinasi wisata berupa gerakan Aksi Sapta Pesona dan Gerakan Sadar Wisata',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Keberadaan pembinaan kesehatan terhadap kelompok masyarakat sekitar daya tarik wisata (kelompok tari, kelompok seni, pedagang aksesoris dll) setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Persentase TPP Non SLHS yang dilakukan pembinaan/pengawasan dengan pemberian label',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteFives as $noteFive) {
            NoteFive::create($noteFive);
        }

        /* note six */
        $noteSixes = [
            [
                'code' => 'p1',
                'question' => 'Adanya regulasi/kebijakan terkait penyediaan layanan transportasi publik',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Adanya regulasi/kebijakan terkait kawasan tertib lalu lintas',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya regulasi/kebijakan terkait sistem manajemen keselamatan lalu lintas dan angkutan jalan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya regulasi/kebijakan terkait analisis dampak lalu lintas',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Penyediaan layanan transportasi publik dan kawasan tertib lalu lintas masuk ke dalam dokumen perencanaan pembangunan daerah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase implementasi protokol kesehatan dalam angkutan umum',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase kendaraan umum yang laik jalan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase kendaraan umum yang memiliki BLUe (Bukti Lulus Uji Elektronik)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Adanya bengkel pemantau emisi gas buang',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase penurunan tingkat fatalitas akibat kecelakaan setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Santunan akibat kecelakaan sebagai dampak kecelakaan lalu lintas setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase jam kerja pengemudi : maksimal 12 jam dan 4 jam istirahat angkutan umum',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Persentase perusahaan angkutan yang telah membuat dan melaporkan sistem manajemen keselamatan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Pelaksanaan pengecekan terhadap kondisi kesehatan pengemudi cek narkoba, cek kesehatan dan sebagainya',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Terdapat pos, fasilitas dan petugas pemeriksa kelaikan umum, fasilitas perbaikan ringan kendaraan umum pada Terminal',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Keberadaan fasilitas istirahat awak kendaraan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Melakukan pemantauan kualitas udara ambien',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Tindak lanjut pengendalian kualitas udara ambien (luar ruang/lingkungan luar)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Tersedia ruang tunggu, fasilitas ibadah, rumah makan, fasilitas dan petugas kebersihan, lampu penerangan ruangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Tersedia fasilitas bagi penumpang penyandang disabilitas dan ibu hamil atau menyusui',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Sarana cuci tangan pakai sabun pada Terminal',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p22',
                'question' => 'Persentase sentra pangan jajanan/kantin dalam terminal yang telah memenuhi standar kesehatan higiene (tempat cuci tangan,tempat mencuci piring,tempat sampah, dll.)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p23',
                'question' => 'Tersedianya toilet yang bersih',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p24',
                'question' => 'Tersedianya Ruang Terbuka Hijau',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p25',
                'question' => 'Tersedia pelayanan kesehatan (pos/ruangan, fasilitas, dan petugas kesehatan)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p26',
                'question' => 'Adanya penerapan Kawasan Tanpa Rokok',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p27',
                'question' => 'Kasus kriminalitas di teminal',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p28',
                'question' => 'Fasilitas pencegah tindak kriminal',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p29',
                'question' => 'Persentase halte yang berfungsi dari jumlah eksisting secara layak pakai, terawat dan bersih',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p30',
                'question' => 'Keberadaan sistem layanan pertolongan kecelakaan yang cepat dan terintegrasi',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p31',
                'question' => 'Tersedianya data/informasi daerah rawan kecelakaan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p32',
                'question' => 'Edukasi penanganan tanggap kecelakaan pada masyarakat di daerah rawan kecelakaan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p33',
                'question' => 'Jumlah titik kemacetan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p34',
                'question' => 'Keberadaan fasilitas jalur pejalan kaki dan penyandang disabilitas',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p35',
                'question' => 'Jumlah titik fasilitas jalur sepeda',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p36',
                'question' => 'Fasilitas penyeberangan orang (jembatan penyeberangan, zebra cross)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p37',
                'question' => 'Adanya kegiatan sosialisasi keselamatan berlalu lintas dan keselamatan jalan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p38',
                'question' => 'Jumlah penindakan pelanggaran lalu lintas',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p39',
                'question' => 'Adanya zona selamat sekolah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p40',
                'question' => 'Adanya ruang henti sepeda motor pada simpang bersinyal (lampu merah)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p41',
                'question' => 'Pengawasan dan penindakan terhadap emisi gas buang kendaraan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p42',
                'question' => 'Adanya forum lalu lintas dan angkutan jalan (LLAJ)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p43',
                'question' => 'Persentase sekolah menengah yang memiliki patroli keamanan sekolah (PKS)',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteSixes as $noteSix) {
            NoteSix::create($noteSix);
        }

        /* note seven */
        $noteSevens = [
            [
                'code' => 'p1',
                'question' => 'Adanya regulasi/kebijakan di Kawasan Perkantoran, Perindustrian (IKM) dan UMKM',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Kegiatan penyelenggaraan kesehatan dan keselamatan kerja di Kawasan Perkantoran, Perindustrian (IKM) dan UMKM masuk dalam dokumen perencanaan pembangunan daerah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Persentase kantor yang telah menerapkan K3',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Angka kecelakaan kerja di perkantoran setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Persentase kantor yang memfasilitasi kegiatan aktivitas fisik/olahraga',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Persentase kantor yang telah memfasilitas pemeriksaan kesehatan pada pegawainya',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Persentase kantor yang menerapkan Kawasan Tanpa Rokok (KTR)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Persentase kantor yang memiliki ruang laktasi',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Jumlah Industri kecil dan menengah yang menyelenggarakan program Kesehatan Keselamatan Kerja/K3',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Pembinaan dan pengawasan dilokasi Industri',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Pemanfaatan kembali material dan sumber daya yang digunakan melalui konsep 4R oleh Industri kecil dan menengah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Persentase perusahaan menyampaikan laporan Rencana Pengelolaan Lingkungan (RKL)/ Rencana Pemantauan Lingkungan (RPL) / Upaya Pengelolaan Lingkungan (UKL)/ Upaya Pemantauan Lingkungan (UPL) secara berkala 6 bulan sekali',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Kasus pencemaran lingkungan dan pengaduan masyarakat setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Pos Upaya Kesehatan Kerja (UKK) aktif',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Persentase UMKM yang memiliki perijinan (NIB/TDP/SKU)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Persentase UMKM sektor makanan, minuman, industri pengolahan yang memiliki Sertifikat Laik Higiene Sanitasi (SLHS), PIRT, POM',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Persentase kecamatan yang melakukan penataan sentra pangan jajanan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Jumlah UMKM sentra pangan jajanan dan kantin yang memiliki Label pembinaan/pengawasan higiene sanitasi pangan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Persentase UMKM yang sudah menerapkan dan menuhi syarat standar kesehatan lingkungan kerja',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Persentase UMKM yang telah menerima pembinaan dan pengawasan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Persentase UMKM yang memiliki pelayanan kesehatan / Pos UKK',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteSevens as $noteSeven) {
            NoteSeven::create($noteSeven);
        }

        /* note eight */
        $noteEights = [
            [
                'code' => 'p1',
                'question' => 'Adanya Tim Penanganan Masalah Kesejahteraan Sosial (Tim Koordinasi Penanggulangan Kemiskinan Daerah/TKPKD/Tim Bansos Pangan dll.)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Melakukan update data ke dalam Sistem Informasi Kesejahteraan Sosial Next Generation (SIKSNG) secara rutin',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya peraturan mengenai Penanganan Masalah Kesejahteraan Sosial suaikan dengan daerahnya',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya layanan pengaduan terkait masalah-masalah sosial (masalah bantuan sosial dll.)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Adanya penanganan masalah kesejahteraan sosial dalam Rencana Pembangunan Jangka Menengah Daerah/RPJMD',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Adanya kegiatan penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) yang aktif dalam setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Pemerlu pelayanan kesejahteraan sosial (PPKS) yang diberikan jaminan sosial',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Adanya kegiatan pelatihan khusus bagi pemerlu pelayanan kesejahteraan sosial (PPKS)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Keberadaan penggiat penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) baik secara individu/kelompok',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Adanya kerjasama dengan stakeholder masyarakat (seperti pihak swasta, akademisi, instansi pemerintah terkait, lembaga keagamaan, individu/donatur, dll) dalam kegiatan penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) di daerah setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Capaian target penurunan angka kemiskinan (4%-6%)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Adanya upaya pemerintah daerah dan swasta dalam peningkatan kemampuan ekonomi untuk komunitas adat terpencil dan daerah perbatasan (misal pendidikan dan pelatihan, bantuan stimulan dll.)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Adanya program pemberdayaan/pendidikan khusus bagi wanita dan anak-anak komunitas adat terpencil dan daerah perbatasan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Adanya program pemenuhan kebutuhan kesehatan bagi komunitas adat terpencil dan daerah perbatasan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Adanya pemenuhan hak sipil bagi komunitas adat terpencil dan daerah perbatasan, misal hak sipil pendaftaran pernikahan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Adanya penggiat komunitas adat terpencil baik secara individu/kelompok/lembaga sosial/yayasan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Adanya regulasi daerah tentang penanganan kekerasan anak, perempuan dan lansia',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Adanya penyelenggaraan penanganan kekerasan anak, perempuan dan lansia dalam Rencana Pembangunan Jangka Menengah Daerah/RPJMD',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Adanya upaya penanganan dan pencegahan angka kekerasan terhadap anak',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Upaya pencegahan untuk menurunkan angka perkawinan pada usia anak',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Adanya upaya pencegahan praktek sunat pada anak perempuan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p22',
                'question' => 'Adanya upaya pendidikan penyuluhan, komunikasi dan informasi tentang kekerasan terhadap perempuan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p23',
                'question' => 'Adanya UPTD PA/P2TP2A (Pusat Pelayanan Terpadu Pemberdayaan Perempuan dan Anak) dalam penanganan kekerasan pada anak, perempuan dan lansia',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p24',
                'question' => 'Adanya penanganan kasus hukum kekerasan terhadap anak, perempuan dan lansia',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p25',
                'question' => 'Keberadaan penggiat penanganan kekerasan terhadap anak, perempuan dan lansia baik secara individu/kelompok',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p26',
                'question' => 'Jumlah kasus kekerasan terhadap anak, perempuan dan lansia yang dilaporkan setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p27',
                'question' => 'Adanya perencanaan dan penganggaran responsif gender',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p28',
                'question' => 'Memiliki program Rute Aman Selamat ke Sekolah (RASS) yang rutin di sosialisasikan setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p29',
                'question' => 'Adanya sarana prasarana dalam mendukung program Rute Aman Selamat ke Sekolah (RASS) seperti halte penumpang angkutan umum, Zone Selamat Sekolah (ZOSS) dan fasilitas untuk pesepeda dan pejalan kaki',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p30',
                'question' => 'Adanya upaya dan peran serta keluarga, masyarakat, media massa dan pemerintah daerah dalam upaya mencegah radikalisme dan tindak pidana terorisme setahun terakhir',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p31',
                'question' => 'Kegiatan pemberdayaan komunitas mantan narapidana teroris/orang terpapar radikalisme',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p32',
                'question' => 'Keberadaan regulasi dalam pencegahan dan penanggulangan radikalisme dan aksi terorisme',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p33',
                'question' => 'Kerjasama pemerintah daerah dengan stakeholder terkait dalam pencegahan dan penanggulangan radikalisme',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p34',
                'question' => 'Kegiatan edukasi seperti sosialisasi, penyebaran materi komunikasi, informasi dan edukasi tentang bahaya terorisme',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteEights as $noteEight) {
            NoteEight::create($noteEight);
        }

        /* note nine */
        $noteNines = [
            [
                'code' => 'p1',
                'question' => 'Adanya regulasi penanggulangan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p2',
                'question' => 'Upaya pencegahan dan penanggulangan bencana masuk ke dalam dokumen perencanaan daerah (seperti RPJMD, Renstra dan RKPD)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p3',
                'question' => 'Adanya Badan/Unit Kerja yang menangani Penanggulangan Bencana Daerah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p4',
                'question' => 'Adanya Tim/Unit Reaksi Cepat (TRC) dalam penanggulangan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p5',
                'question' => 'Adanya rencana penanggulangan bencana dan rencana penanggulangan kedaruratan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p6',
                'question' => 'Memiliki rencana kontingensi bencana daerah menurut hazard',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p7',
                'question' => 'Melakukan kegiatan simulasi tanggap penanggulangan bencana minimal 1 kali dalam setahun.',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p8',
                'question' => 'Keberadaan persediaan logistik dan peralatan yang mencukupi di masing-masing klaster daerah rawan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p9',
                'question' => 'Upaya program penguatan dan pemulihan sosial untuk korban bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p10',
                'question' => 'Persentase desa/kelurahan tangguh bencana (Destana) yang sudah menerapkan Standar Nasional Indonesia/SNI sebagai acuan bersama dalam melakukan upaya pengelolaan resiko bencana di daerah rawan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p11',
                'question' => 'Adanya sistem peringatan dini terintegrasi sesuai ancaman bencana wilayahnya (EWS longsor, EWS banjir, EWS tsunami)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p12',
                'question' => 'Adanya rambu dan papan informasi peringatan dini bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p13',
                'question' => 'Pelaksanaan diseminasi informasi peringatan dini kepada stakeholder terkait dan masyarakat',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p14',
                'question' => 'Keberadaan peta rawan bencana daerah',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p15',
                'question' => 'Perencanaan wilayah/tata ruang yang telah mengacu pada peta rawan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p16',
                'question' => 'Tersedianya SKDR sebagai sistem pemantauan perkembangan trend suatu penyakit menular yang potensial KLB/wabah dari waktu ke waktu',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p17',
                'question' => 'Capaian Respon Alert (sinyal) SKDR',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p18',
                'question' => 'Persentase penyelenggaraan program Satuan Pendidikan Aman Bencana (SPAB) di sekolah pada daerah rawan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p19',
                'question' => 'Adanya fasilitas sarana prasarana pendidikan yang aman dari resiko bencana di setiap satuan pendidikan',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p20',
                'question' => 'Memiliki Forum Pengurangan Risiko Bencana (FPRB) sebagai upaya pemberdayaan masyarakat dalam penanggulangan bencana di Kawasan Rawan Bencana (KRB)',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p21',
                'question' => 'Melakukan kerjasama dengan pemerintah daerah lain yang berbatasan dengan kawasan Rawan Bencana (KRB) dalam upaya penanggulangan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p22',
                'question' => 'Adanya kerjasama desa/kelurahan rawan bencana dengan desa/kelurahan sekitarnya dalam rangka penanggulangan bencana',
                'setting_id' => $newSetting->id
            ],
            [
                'code' => 'p23',
                'question' => 'Jumlah kerjasama dalam upaya penanggulangan bencana dengan pihak lain (Melampirkan dokumen kerjasama/MOU)',
                'setting_id' => $newSetting->id
            ]
        ];

        foreach ($noteNines as $noteNine) {
            NoteNine::create($noteNine);
        }

        return redirect()->route('setting.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('dashboard.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'period' => 'required|string|unique:settings,period,' . $setting->id,
        ], [
            'period.unique' => 'Tahun periode telah ada sebelumnya'
        ]);

        $setting->period = $request->input('period');
        $setting->save();

        return redirect()->route('setting.edit', $setting->id)->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        if ($setting->id == 1) {
            Session::flash('warning', 'Tahun periode ' . $setting->period . ' tidak dapat dihapus (merupakan data awal).');
        } else {
            Session::flash('success', 'Tahun periode ' . $setting->period . ' beserta seluruh datanya telah dihapus.');
            $setting->delete();
        }
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $settings = Setting::get();

            return DataTables::of($settings)
                ->addColumn('action', function ($setting) {
                    return view('dashboard.setting.action', compact('setting'))->render();
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
