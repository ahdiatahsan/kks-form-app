<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission as PermissionModel;
use Spatie\Permission\Models\Role as PermissionRole;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        # Create permissions
        $permissions = [
            'dashboard-view',

            'introduction-view',
            'introduction-create',
            'introduction-update',
            'introduction-delete',

            'builder-view',
            'builder-create',
            'builder-update',
            'builder-delete',

            'kks-view',
            'kks-create',
            'kks-update',
            'kks-delete',

            'district-view',
            'district-create',
            'district-update',
            'district-delete',

            'village-view',
            'village-create',
            'village-update',
            'village-delete',

            'funding-view',
            'funding-create',
            'funding-update',
            'funding-delete',

            'tatanan-view',
            'tatanan-create',
            'tatanan-update',
            'tatanan-delete',

            'note-view',
            'note-create',
            'note-update',
            'note-delete',

            'conclusion-view',
            'conclusion-create',
            'conclusion-update',
            'conclusion-delete',

            // 'setting-view',
            // 'setting-create',
            // 'setting-update',
            // 'setting-delete',
        ];

        foreach ($permissions as $permission) {
            PermissionModel::create(['name' => $permission]);
        }

        # Create roles
        //Bappeda
        $roleAdministrator = PermissionRole::create(['name' => 'administrator']);

        //Dinas
        $roleOffice = PermissionRole::create(['name' => 'office']);
        $roleOffice->syncPermissions([
            'dashboard-view',

            'introduction-view',

            'builder-view',

            'kks-view',

            'district-view',

            'village-view',

            'funding-view',
            'funding-create',
            'funding-update',
            'funding-delete',

            'tatanan-view',
            'tatanan-create',
            'tatanan-update',

            'note-view',

            'conclusion-view',
        ]);

        //Kecamatan
        $roleDistrict = PermissionRole::create(['name' => 'district']);
        $roleDistrict->syncPermissions([
            'dashboard-view',

            'introduction-view',

            'builder-view',

            'kks-view',

            'district-view',
            'district-create',
            'district-update',
            'district-delete',

            'village-view',

            'funding-view',

            'conclusion-view',
        ]);

        //Desa
        $roleVillage = PermissionRole::create(['name' => 'village']);
        $roleVillage->syncPermissions([
            'dashboard-view',

            'introduction-view',

            'builder-view',

            'kks-view',

            'district-view',

            'village-view',
            'village-create',
            'village-update',
            'village-delete',

            'funding-view',

            'conclusion-view',
        ]);

        # Create users
        $userAdministrator = User::factory()->create([
            'name' => 'Badan Perencanaan Pembangunan Daerah',
            'phone' => '08',
            'email' => 'bappeda@mail.com',
            'password' => Hash::make('password')
        ]);

        $usersOffice = [
            [
                'name' => 'Dinas Ketahanan Pangan (DKP)',
                'phone' => '08',
                'email' => 'dkp@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Kesehatan (Dinkes)',
                'phone' => '08',
                'email' => 'dinkes@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Pertanian',
                'phone' => '08',
                'email' => 'pertanian@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Kepolisian Resor (Polres)',
                'phone' => '08',
                'email' => 'polres@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Perusahaan Daerah Air Minum (PDAM)',
                'phone' => '08',
                'email' => 'pdam@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Kesatuan Pengelolaan Hutan (KPH)',
                'phone' => '08',
                'email' => 'kph@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Aplikasi Manajemen Perjalanan Dinas dan Konsultan (AMAN)',
                'phone' => '08',
                'email' => 'aman@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Peternakan dan Perikanan',
                'phone' => '08',
                'email' => 'peternakan@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Badan Penanggulangan Bencana Daerah (BPBD)',
                'phone' => '08',
                'email' => 'bpbd@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'PTSP Izin',
                'phone' => '08',
                'email' => 'ptspizin@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Pendidikan dan Kebudayaan (Diknas)',
                'phone' => '08',
                'email' => 'diknas@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'KESRA Sekretariat Daerah',
                'phone' => '08',
                'email' => 'kesrasekda@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Koperasi UKM',
                'phone' => '08',
                'email' => 'koperasiukm@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Perindustrian dan Perdagangan (Disperindag)',
                'phone' => '08',
                'email' => 'disperindag@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Pemuda, Olahraga dan Pariwisata (Dispopar)',
                'phone' => '08',
                'email' => 'dispopar@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak (DP3A)',
                'phone' => '08',
                'email' => 'dp3a@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Badan Kesatuan Bangsa dan Politik (Kesbangpol)',
                'phone' => '08',
                'email' => 'kesbangpol@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Sosial (Dinsos)',
                'phone' => '08',
                'email' => 'dinsos@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Pemadam kebakaran (DAMKAR)',
                'phone' => '08',
                'email' => 'damkar@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Perumahan, Kawasan Permukiman dan Pertanahan (Perkimtan)',
                'phone' => '08',
                'email' => 'perkimtan@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Pekerjaan Umum (PU)',
                'phone' => '08',
                'email' => 'dinaspu@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Perhubungan (Dishub)',
                'phone' => '08',
                'email' => 'dishub@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Lingkungan Hidup (DLH)',
                'phone' => '08',
                'email' => 'dlh@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Dinas Penanaman Modal Dan PTSP (DPMPTSP)',
                'phone' => '08',
                'email' => 'dpmptsp@mail.com',
                'password' => Hash::make('password')
            ],
        ];

        foreach($usersOffice as $userOffice){
            User::create($userOffice);
        }

        $usersDistrict = [
            [
                'name' => 'Kecamatan Alla',
                'phone' => '08',
                'email' => 'alla@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Dzulkifli DM'
            ],
            [
                'name' => 'Kecamatan Anggareja',
                'phone' => '085340949767',
                'email' => 'anggareja@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Suparman, P.S.E'
            ],
            [
                'name' => 'Kecamatan Baraka',
                'phone' => '085255041935',
                'email' => 'baraka@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'M. Gamaluddin, ST'
            ],
            [
                'name' => 'Kecamatan Baroko',
                'phone' => '081355075582',
                'email' => 'baroko@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Edy Muchtar, S.Pd, M.AP'
            ],
            [
                'name' => 'Kecamatan Bungin',
                'phone' => '082347770677',
                'email' => 'bungin@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Jumasang, S.Pd., M.Pd'
            ],
            [
                'name' => 'Kecamatan Buntu Batu',
                'phone' => '085255977552',
                'email' => 'buntubatu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Nur Alam, S.Pd.I'
            ],
            [
                'name' => 'Kecamatan Cendana',
                'phone' => '08',
                'email' => 'cendana@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Baharuddin'
            ],
            [
                'name' => 'Kecamatan Curio',
                'phone' => '08',
                'email' => 'curio@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sainal'
            ],
            [
                'name' => 'Kecamatan Enrekang',
                'phone' => '08114200140',
                'email' => 'enrekang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mahmuddin, SP, MP'
            ],
            [
                'name' => 'Kecamatan Maiwa',
                'phone' => '085203803888',
                'email' => 'maiwa@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Asruddin, S.Sos'
            ],
            [
                'name' => 'Kecamatan Malua',
                'phone' => '081244250016',
                'email' => 'malua@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Drs. H. Sudirman, M.Si'
            ],
            [
                'name' => 'Kecamatan Masalle',
                'phone' => '085242888949',
                'email' => 'masalle@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rusman Jalani, SP'
            ],
        ];

        foreach($usersDistrict as $userDistrict){
            User::create($userDistrict);
        }

        $usersVillage = [
            [
                'name' => 'Kelurahan Kambiolangi',
                'phone' => '085395194421',
                'email' => 'kambiolangi@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abd. Salam',
                'district_id' => 26
            ],
            [
                'name' => 'Kelurahan Buntu Sigi',
                'phone' => '087396705279',
                'email' => 'buntusigi@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mustakim',
                'district_id' => 26
            ],
            [
                'name' => 'Kelurahan Kalosi',
                'phone' => '085210073297',
                'email' => 'kalosi@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Suhiba Baddu, SE',
                'district_id' => 26
            ],
            [
                'name' => 'Desa Bolang',
                'phone' => '085255886554',
                'email' => 'bolang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Nasaruddin, S.Pd.I',
                'district_id' => 26
            ],
            [
                'name' => 'Desa Mata Allo',
                'phone' => '08',
                'email' => 'mataallo@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Usman Rasi',
                'district_id' => 26
            ],
            [
                'name' => 'Desa Pana',
                'phone' => '082187091676',
                'email' => 'pana@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Yusran Yunus',
                'district_id' => 26
            ],
            [
                'name' => 'Desa Sumillan',
                'phone' => '082325999727',
                'email' => 'sumillan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sudirman',
                'district_id' => 26
            ],
            [
                'name' => 'Desa Taulo',
                'phone' => '081355461823',
                'email' => 'taulo@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Herman Emba, SE',
                'district_id' => 26
            ],
            [
                'name' => 'Kelurahan Lakawan',
                'phone' => '082328323232',
                'email' => 'lakawan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'M.Seftian Budiatomo, S.STP, M.AP',
                'district_id' => 27
            ],
            [
                'name' => 'Kelurahan Mataran',
                'phone' => '081342932474',
                'email' => 'mataran@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Supardi Pammu, S.E',
                'district_id' => 27
            ],
            [
                'name' => 'Kelurahan Tanete	',
                'phone' => '085242397712',
                'email' => 'tanete@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muhlis, S.E',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Singki',
                'phone' => '081242819208',
                'email' => 'singki@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Darji',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Siammbo',
                'phone' => '081355826170',
                'email' => 'siammbo@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Agung',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Tindalun',
                'phone' => '085242494463',
                'email' => 'tindalun@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Samsul, ST',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Bamba Puang',
                'phone' => '085255511642',
                'email' => 'bambapuang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdul Muis',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Mendatte',
                'phone' => '081354017097',
                'email' => 'mendatte@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'alimin darisa',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Batu Noni',
                'phone' => '081355484853',
                'email' => 'batunoni@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Saharuddin',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Saruran',
                'phone' => '085343624290',
                'email' => 'saruran@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rustan, K.S.H',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Tampo',
                'phone' => '085299403668',
                'email' => 'tampo@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Marzuki',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Pekalobean',
                'phone' => '085255221562',
                'email' => 'pekalobean@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Drs. Nasmin',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Bubun Lamba',
                'phone' => '082189195194',
                'email' => 'bubunlamba@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Wawan Darmawan',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Salu Dewata',
                'phone' => '082193139618',
                'email' => 'saludewata@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Jupri Juma',
                'district_id' => 27
            ],
            [
                'name' => 'Desa Mampu',
                'phone' => '085256295222',
                'email' => 'mampu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mustafa',
                'district_id' => 27
            ],
            [
                'name' => 'Kelurahan Balla',
                'phone' => '085340464307',
                'email' => 'balla@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Hasir',
                'district_id' => 28
            ],
            [
                'name' => 'Kelurahan Tomenawa',
                'phone' => '085242591006',
                'email' => 'tomenawa@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Drs. Lunik',
                'district_id' => 28
            ],
            [
                'name' => 'Kelurahan Baraka	',
                'phone' => '085298875767',
                'email' => 'kelbaraka@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Armansyah, S.Pd',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Banti',
                'phone' => '085214969027',
                'email' => 'banti@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Aco',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Bone Bone',
                'phone' => '081355886694',
                'email' => 'bonebone@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Drs. Idris',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Bontongan',
                'phone' => '08',
                'email' => 'bontongan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mardan, S.Sos',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Janggurara',
                'phone' => '082167535065',
                'email' => 'janggurara@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sainal, SE',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Kadingeh',
                'phone' => '085239900268',
                'email' => 'Kadingeh@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Umar',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Kendenan',
                'phone' => '081355629529',
                'email' => 'kendenan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Bakri Puttung, S.Pd',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Parinding',
                'phone' => '085299415090',
                'email' => 'parinding@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Yusup Geno',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Pepandungan',
                'phone' => '081355279969',
                'email' => 'pepandungan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Tahir',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Perangian',
                'phone' => '085255950055',
                'email' => 'perangian@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abd. Rajab',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Salukanan',
                'phone' => '082344987711',
                'email' => 'salukanan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Takdir, SP',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Tiro Wali',
                'phone' => '081355099245',
                'email' => 'tirowali@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Guntur',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Pandang Batu',
                'phone' => '081355767782',
                'email' => 'pandangbatu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muis',
                'district_id' => 28
            ],
            [
                'name' => 'Desa Baroko',
                'phone' => '081342930850',
                'email' => 'desabaroko@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abidin, SH',
                'district_id' => 29
            ],
            [
                'name' => 'Desa Benteng Alla',
                'phone' => '082338777111',
                'email' => 'bentengalla@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Saleh, A. Md',
                'district_id' => 29
            ],
            [
                'name' => 'Desa Benteng Alla Utara',
                'phone' => '081333957992',
                'email' => 'bentengallautara@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Waluddin Tandigau',
                'district_id' => 29
            ],
            [
                'name' => 'Desa Patongloan',
                'phone' => '082278819021',
                'email' => 'patongloan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Atto Zainal',
                'district_id' => 29
            ],
            [
                'name' => 'Desa Tongko',
                'phone' => '085299286465',
                'email' => 'tongko@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Tahir Coko',
                'district_id' => 29
            ],
            [
                'name' => 'Desa Banua',
                'phone' => '085230696812',
                'email' => 'banua@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rustam',
                'district_id' => 30
            ],
            [
                'name' => 'Desa Baruka',
                'phone' => '085240610439',
                'email' => 'baruka@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Safri',
                'district_id' => 30
            ],
            [
                'name' => 'Desa Bulo',
                'phone' => '08',
                'email' => 'bulo@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Wahyu',
                'district_id' => 30
            ],
            [
                'name' => 'Desa Bungin',
                'phone' => '085340487500',
                'email' => 'desabungin@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Dulyamin',
                'district_id' => 30
            ],
            [
                'name' => 'Desa Sawito',
                'phone' => '081343608898',
                'email' => 'sawito@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Samsuddin',
                'district_id' => 30
            ],
            [
                'name' => 'Desa Tallang Rilau',
                'phone' => '082348152891',
                'email' => 'tallangrilau@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Harminsah',
                'district_id' => 30
            ],
            [
                'name' => 'Desa Buntu Mondong',
                'phone' => '085255671747',
                'email' => 'buntumondong@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Imran',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Eran Batu',
                'phone' => '082347211060',
                'email' => 'eranbatu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Ismail Amir',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Langda',
                'phone' => '082337064541',
                'email' => 'langda@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Risal',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Latimojong',
                'phone' => '082139600587',
                'email' => 'latimojong@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Syahruddin',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Ledan',
                'phone' => '081243801726',
                'email' => 'ledan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Marwan',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Lunjen',
                'phone' => '08',
                'email' => 'lunjen@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Wahyudy Bylhaq Syahrim',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Pasui',
                'phone' => '085394852105',
                'email' => 'pasui@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdul Jasim Ishak',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Potok Ullin',
                'phone' => '0858265321502',
                'email' => 'potokullin@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rusman Nafsir',
                'district_id' => 31
            ],
            [
                'name' => 'Desa Cendana',
                'phone' => '085236171013',
                'email' => 'desacendana@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'M. Kahar K',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Karrang',
                'phone' => '081241378427',
                'email' => 'karrang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muhammad Supardi',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Lebang',
                'phone' => '081242333552',
                'email' => 'lebang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Ir. Rusdi',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Malalin',
                'phone' => '081342025097',
                'email' => 'malalin@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sareng Toto, SE',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Pinang',
                'phone' => '081242209775',
                'email' => 'pinang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rusli Sule',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Pundilemo',
                'phone' => '082199396261',
                'email' => 'pundilemo@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Aminuddin',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Taulan',
                'phone' => '085242128133',
                'email' => 'taulan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muh. Arsum',
                'district_id' => 32
            ],
            [
                'name' => 'Desa Buntu Barana',
                'phone' => '085256150145',
                'email' => 'buntubarana@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Malik',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Buntu Pema',
                'phone' => '082288725827',
                'email' => 'buntupema@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rizal',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Curio',
                'phone' => '085214720591',
                'email' => 'desacurio@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sainal Budi',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Mandalan',
                'phone' => '051220344062',
                'email' => 'mandalan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Ahmad',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Mekkala',
                'phone' => '085318838809',
                'email' => 'mekkala@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Addin',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Pabaloran',
                'phone' => '085246490240',
                'email' => 'pabaloran@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Ir. Sumarsono',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Parombean',
                'phone' => '081355912706',
                'email' => 'parombean@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdurrahman Zaid',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Salassa',
                'phone' => '081244644145',
                'email' => 'salassa@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rusli',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Sanglepongan',
                'phone' => '082394614246',
                'email' => 'sanglepongan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Nurmiati',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Sumbang',
                'phone' => '081355340461',
                'email' => 'sumbang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Hasbullah',
                'district_id' => 33
            ],
            [
                'name' => 'Desa Tallungura',
                'phone' => '081342003155',
                'email' => 'tallungura@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Amir Gani',
                'district_id' => 33
            ],
            [
                'name' => 'Kelurahan Leoran',
                'phone' => '081355888835',
                'email' => 'leoran@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Winalda, S.STP',
                'district_id' => 34
            ],
            [
                'name' => 'Kelurahan Lewaja',
                'phone' => '082171026271',
                'email' => 'lewaja@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Deceng Rumbu, S.E, M.Ap',
                'district_id' => 34
            ],
            [
                'name' => 'Kelurahan Puserren',
                'phone' => '08',
                'email' => 'puserren@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => '-',
                'district_id' => 34
            ],
            [
                'name' => 'Kelurahan Tuara',
                'phone' => '081317948972',
                'email' => 'tuara@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muhammad Razak, S.STP',
                'district_id' => 34
            ],
            [
                'name' => 'Kelurahan Juppandang',
                'phone' => '08134791645',
                'email' => 'juppandang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Ilham Akbar Eka Yudha, S.STP',
                'district_id' => 34
            ],
            [
                'name' => 'Kelurahan Galonta',
                'phone' => '085215000193',
                'email' => 'galonta@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Ilham Arfah, S.STP',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Temban',
                'phone' => '081243850107',
                'email' => 'temban@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Hasan Basri',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Buttu Batu',
                'phone' => '085344266216',
                'email' => 'buttubatu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Taqdir, A.Md',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Cemba',
                'phone' => '081355541234',
                'email' => 'cemba@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Jumadil, S.Fil',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Tungka',
                'phone' => '082344752906',
                'email' => 'tungka@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Takbir, A.Md',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Kaluppini',
                'phone' => '08',
                'email' => 'kaluppini@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muh. Salata',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Karueng',
                'phone' => '085322233009',
                'email' => 'karueng@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Usmayadi Syarifuddin',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Lembang',
                'phone' => '082358888015',
                'email' => 'lembang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muh. Irfan, S.Pd',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Ranga',
                'phone' => '08',
                'email' => 'ranga@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Saim',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Rossoan',
                'phone' => '081343724502',
                'email' => 'rossoan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'H. Marsuki',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Tallu Bamba',
                'phone' => '082187740473',
                'email' => 'tallubamba@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abd. Mumin',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Tobalu',
                'phone' => '085399276740',
                'email' => 'tobalu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muh. Khadafi, S.Pd',
                'district_id' => 34
            ],
            [
                'name' => 'Desa Tokkonan',
                'phone' => '085299941414',
                'email' => 'tokkonan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Syamsuddin',
                'district_id' => 34
            ],
            [
                'name' => 'Kelurahan Bangkala',
                'phone' => '081342928022',
                'email' => 'bangkala@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Andi Ridwan. S. E',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Baringin',
                'phone' => '081354644465',
                'email' => 'baringin@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Tadam, S.Pd., M.M',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Batu Mila',
                'phone' => '082194027627',
                'email' => 'batumila@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rahmawati, S.Pd',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Boiya',
                'phone' => '085395939426',
                'email' => 'boiya@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Samir',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Boto Malangga',
                'phone' => '085255098417',
                'email' => 'botomalangga@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdul Haris',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Kaluppang',
                'phone' => '085396346655',
                'email' => 'kaluppang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdul Rauf',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Labuku',
                'phone' => '082348979607',
                'email' => 'labuku@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdul Wahab',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Lebani',
                'phone' => '085395999977',
                'email' => 'lebani@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abdul Majid',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Limbuang',
                'phone' => '081342428641',
                'email' => 'limbuang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rahman',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Mangkawani',
                'phone' => '081355458778',
                'email' => 'mangkawani@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Bakri Said',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Matajang',
                'phone' => '082293336009',
                'email' => 'matajang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'P. Karman',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Ongko',
                'phone' => '081343527775',
                'email' => 'ongko@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mustakim',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Paladang',
                'phone' => '08',
                'email' => 'paladang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Anwar',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Palakka',
                'phone' => '081342633870',
                'email' => 'palakka@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mustafa',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Pariwang',
                'phone' => '08',
                'email' => 'pariwang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Yusuf Usman',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Pasang',
                'phone' => '085242271430',
                'email' => 'pasang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Rustan Arsyad',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Patondon Salu',
                'phone' => '081355801402',
                'email' => 'patondonsalu@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mukhlis, S.E',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Puncak Harapan',
                'phone' => '085398890427',
                'email' => 'puncakharapan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Muhammad Ali',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Salo Dua',
                'phone' => '081335683322',
                'email' => 'salodua@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Amiruddin',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Tanete',
                'phone' => '081343561654',
                'email' => 'tanetemaiwa@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Jasman',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Tapong',
                'phone' => '08113352654',
                'email' => 'tapong@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Saharuna',
                'district_id' => 35
            ],
            [
                'name' => 'Desa Tuncung',
                'phone' => '081355164571',
                'email' => 'tuncung@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Abd. Rahman',
                'district_id' => 35
            ],
            [
                'name' => 'Kelurahan Malua',
                'phone' => '085398901877',
                'email' => 'kelmalua@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Samsumarlin Abdullah, S.KM',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Bonto',
                'phone' => '082188163964',
                'email' => 'bonto@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Mahaning',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Buntu Batuan',
                'phone' => '0824099705',
                'email' => 'buntubatuan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Basri',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Dulang',
                'phone' => '085262998997',
                'email' => 'dulang@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Yahya, S.Pd',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Kolai',
                'phone' => '085399054637',
                'email' => 'kolai@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Syukur, S.IP',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Rante Mario',
                'phone' => '081241089277',
                'email' => 'rantemario@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'H. Herman, S.Sos',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Tallung Tondok',
                'phone' => '082197691295',
                'email' => 'tallungtondok@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Nasri Sapa, S.Sos',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Tangru',
                'phone' => '082346558593',
                'email' => 'tangru@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Faisal',
                'district_id' => 36
            ],
            [
                'name' => 'Desa Batu Kede',
                'phone' => '082332551011',
                'email' => 'batukede@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Supardi Pida',
                'district_id' => 37
            ],
            [
                'name' => 'Desa Buntu Sarong',
                'phone' => '085340528663',
                'email' => 'buntusarong@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sudarman',
                'district_id' => 37
            ],
            [
                'name' => 'Desa Masalle',
                'phone' => '082396685883',
                'email' => 'desamasalle@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Risal',
                'district_id' => 37
            ],
            [
                'name' => 'Desa Mundan',
                'phone' => '081343769823',
                'email' => 'mundan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Samsir',
                'district_id' => 37
            ],
            [
                'name' => 'Desa Rampunan',
                'phone' => '081257982943',
                'email' => 'rampunan@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Syamsir',
                'district_id' => 37
            ],
            [
                'name' => 'Desa Tongkonan Bass',
                'phone' => '082339866441',
                'email' => 'tongkonanbass@mail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Irfan, ST',
                'district_id' => 37
            ],
        ];

        foreach($usersVillage as $userVillage){
            User::create($userVillage);
        }

        # Assign roles
        $userAdministrator->assignRole($roleAdministrator);

        $userOffice = User::where('id', '>', 1)->orWhere('id', '<', 26)->get();
        foreach($userOffice as $user){
            $user->assignRole($roleOffice);
        }

        $userDistrict = User::where('id', '>', 25)->orWhere('id', '<', 38)->get();
        foreach($userDistrict as $user){
            $user->assignRole($roleDistrict);
        }

        $userVillage = User::where('id', '>', 37)->get();
        foreach($userVillage as $user){
            $user->assignRole($roleVillage);
        }
    }
}
