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
            'name' => 'Dinas Kelautan dan Perikanan',
            'phone' => '01234678911',
            'email' => 'dkp@mail.com',
            'password' => Hash::make('password'),

            'district_id' => null
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
