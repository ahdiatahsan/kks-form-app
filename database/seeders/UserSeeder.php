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
            'phone' => '01234678901',
            'email' => 'bappeda@mail.com',
            'password' => Hash::make('password'),

            'district_id' => null
        ]);

        $userOffice = User::factory()->create([
            [
                'name' => 'Dinas Kelautan dan Perikanan (DKP)',
                'phone' => '01234678911',
                'email' => 'dkp@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Kesehatan (Dinkes)',
                'phone' => '01234678912',
                'email' => 'dinkes@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Kepolisian Resor (Polres)',
                'phone' => '01234678912',
                'email' => 'polres@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Perusahaan Daerah Air Minum (PDAM)',
                'phone' => '01234678912',
                'email' => 'pdam@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Kesatuan Pengelolaan Hutan (KPH)',
                'phone' => '01234678912',
                'email' => 'kph@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Aplikasi Manajemen Perjalanan Dinas dan Konsultan (AMAN)',
                'phone' => '01234678912',
                'email' => 'aman@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Peternakan dan Perikanan',
                'phone' => '01234678912',
                'email' => 'peternakan@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Badan Penanggulangan Bencana Daerah (BPBD)',
                'phone' => '01234678912',
                'email' => 'bpbd@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'PTSP Izin',
                'phone' => '01234678912',
                'email' => 'ptspizin@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Pendidikan dan Kebudayaan (Diknas)',
                'phone' => '01234678912',
                'email' => 'diknas@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'KESRA Sekretariat Daerah',
                'phone' => '01234678912',
                'email' => 'kesrasekda@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Koperasi UKM',
                'phone' => '01234678912',
                'email' => 'koperasiukm@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Perindustrian dan Perdagangan (Disperindag)',
                'phone' => '01234678912',
                'email' => 'disperindag@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Pemuda, Olahraga dan Pariwisata (Dispopar)',
                'phone' => '01234678912',
                'email' => 'dispopar@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak (DP3A)',
                'phone' => '01234678912',
                'email' => 'dp3a@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Badan Kesatuan Bangsa dan Politik (Kesbangpol)',
                'phone' => '01234678912',
                'email' => 'kesbangpol@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Sosial (Dinsos)',
                'phone' => '01234678912',
                'email' => 'dinsos@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Pemadam kebakaran (DAMKAR)',
                'phone' => '01234678912',
                'email' => 'damkar@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Perumahan, Kawasan Permukiman dan Pertanahan (Perkimtan)',
                'phone' => '01234678912',
                'email' => 'perkimtan@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Pekerjaan Umum (PU)',
                'phone' => '01234678912',
                'email' => 'dinaspu@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Perhubungan (Dishub)',
                'phone' => '01234678912',
                'email' => 'dishub@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
            [
                'name' => 'Dinas Lingkungan Hidup (DLH)',
                'phone' => '01234678912',
                'email' => 'dlh@mail.com',
                'password' => Hash::make('password'),
                'district_id' => null
            ],
        ]);

        $userDistrict = User::factory()->create([
            'name' => 'Kecamatan Alla',
            'phone' => '01234678921',
            'email' => 'alla@mail.com',
            'password' => Hash::make('password'),

            'district_id' => null
        ]);

        $userVillage = User::factory()->create([
            'name' => 'Desa Alla',
            'phone' => '01234678931',
            'email' => 'pana@mail.com',
            'password' => Hash::make('password'),

            'district_id' => 3
        ]);

        # Assign roles
        $userAdministrator->assignRole($roleAdministrator);
        $userOffice->assignRole($roleOffice);
        $userDistrict->assignRole($roleDistrict);
        $userVillage->assignRole($roleVillage);
    }
}
