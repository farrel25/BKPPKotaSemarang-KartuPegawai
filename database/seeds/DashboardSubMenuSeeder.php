<?php

use App\DashboardSubMenu;
use Illuminate\Database\Seeder;

class DashboardSubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dashboardMenuIds = [1, 1, 2, 2, 3, 4, 4, 5, 5];

        $name = [
            // 1
            'Dashboard',
            'Kembali ke Beranda',

            // 2
            'Pengajuan Kartu Pegawai',
            'Kartu Pegawai Selesai',

            // 3
            'Data Pegawai',

            // 4
            'Dashboard Menu',
            'Dashboard Sub Menu',

            // 5
            'Akun Pengguna',
            'Role dan Hak Akses',
        ];

        $urlPath = [
            // 1
            '/dashboard',
            '/',

            // 2
            'dashboard/kartu-pegawai/pengajuan',
            'dashboard/kartu-pegawai/selesai',

            // 3
            '/dashboard/pegawai/data',

            // 4
            '/dashboard/manajemen-menu/dashboard-menu',
            '/dashboard/manajemen-menu/dashboard-sub-menu',

            // 5
            '/dashboard/manajemen-pengguna/akun',
            '/dashboard/manajemen-pengguna/role-dan-hak-akses',
        ];

        $icon = [
            // 1
            'metismenu-icon pe-7s-rocket',
            'metismenu-icon pe-7s-home',

            // 2
            'metismenu-icon pe-7s-download',
            'metismenu-icon pe-7s-id',

            // 3
            'metismenu-icon pe-7s-paper-plane',

            // 4
            'metismenu-icon pe-7s-photo-gallery',
            'metismenu-icon pe-7s-albums',

            // 5
            'metismenu-icon pe-7s-user',
            'metismenu-icon pe-7s-network',
        ];

        for ($i = 0; $i < count($dashboardMenuIds); $i++) {
            DashboardSubMenu::create([
                'dashboard_menu_id' => $dashboardMenuIds[$i],
                'name' => $name[$i],
                'url_path' => $urlPath[$i],
                'icon' => $icon[$i],
                'is_active' => 1,
            ]);
        }
    }
}
