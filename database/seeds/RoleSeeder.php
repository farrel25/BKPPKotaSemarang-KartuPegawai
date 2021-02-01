<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = collect([
            'Administrator',
            'Pegawai',
        ]);

        $roles->each(function ($role) {
            Role::create([
                'name' => $role
            ]);
        });
    }
}
