<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionIds = [1, 2, 3, 4, 5];
        $roleIds = [1, 1, 1, 1, 1];

        for ($i = 0; $i < count($permissionIds); $i++) {
            \DB::table('role_has_permissions')->insert([
                'permission_id' => $permissionIds[$i],
                'role_id' => $roleIds[$i]
            ]);
        }
    }
}
