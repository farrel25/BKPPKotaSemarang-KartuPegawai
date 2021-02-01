<?php

use App\DashboardMenu;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DashboardMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = collect([
            'Menu Utama',
            'Kartu Pegawai',
            'Pegawai',
            'Manajemen Menu',
            'Manajemen Pengguna',
        ]);

        $menus->each(function ($menu) {
            DashboardMenu::create([
                'name' => $menu
            ]);
            Permission::create([
                'name' => $menu
            ]);
        });
    }
}
