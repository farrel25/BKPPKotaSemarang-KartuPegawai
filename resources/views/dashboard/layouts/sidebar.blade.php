<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                @php
                // ambil role id dari user yang sedang login
                $userRoleId = Auth::user()->roles->pluck('id')->first();
                // dd($userRoleId);

                // ambil menu yang boleh diakses user berdasarkan role user
                $menus = \DB::table('dashboard_menus')->select('dashboard_menus.id', 'dashboard_menus.name')
                ->join('role_has_permissions', 'dashboard_menus.id', '=', 'role_has_permissions.permission_id')
                ->where('role_has_permissions.role_id', $userRoleId)
                ->get();
                @endphp

                @foreach ($menus as $menu)
                <li class="app-sidebar__heading ">{{ $menu->name }}</li>

                @php
                $subMenus = DB::table('dashboard_sub_menus')
                ->select('dashboard_sub_menus.id', 'dashboard_sub_menus.name', 'dashboard_sub_menus.url_path',
                'dashboard_sub_menus.icon', 'dashboard_sub_menus.is_active')
                ->join('dashboard_menus', 'dashboard_sub_menus.dashboard_menu_id', '=', 'dashboard_menus.id')
                ->where('dashboard_sub_menus.dashboard_menu_id', $menu->id)
                ->get();
                @endphp


                @foreach ($subMenus as $subMenu)

                @php
                // var_dump($subMenu);
                $paths = Request::segments();
                $path = '';
                foreach ($paths as $p) {
                $path .= '/' . $p;
                }
                @endphp

                <li>
                    <a href="{{ $subMenu->url_path }}" class="{{ $path == $subMenu->url_path ? 'mm-active':'' }}">
                        <i class="{{ $subMenu->icon }}"></i>
                        {{ $subMenu->name }}
                    </a>
                </li>

                @endforeach
                @endforeach


                {{-- <li class="app-sidebar__heading">Menu Utama</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'mm-active' : '' }}">
                <i class="metismenu-icon pe-7s-rocket"></i>
                Dashboard
                </a>
                </li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Kembali ke Beranda
                    </a>
                </li>
                <li class="app-sidebar__heading">Kartu Pegawai</li>
                <li>
                    <a href="{{ route('kartu-pegawai.pengajuan-kartu-pegawai') }}"
                        class="{{ request()->is('dashboard/kartu-pegawai/pengajuan') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-download"></i>
                        Pengajuan Kartu Pegawai
                    </a>
                </li>
                <li>
                    <a href="{{ route('kartu-pegawai.kartu-pegawai-selesai') }}"
                        class="{{ request()->is('dashboard/kartu-pegawai/selesai') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Kartu Pegawai Selesai
                    </a>
                </li>
                <li class="app-sidebar__heading">Manajemen Menu</li>
                <li>
                    <a href="{{ route('manajemen-menu.menu') }}"
                        class="{{ request()->is('dashboard/dashboard-menu') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Dashboard Menu
                    </a>
                </li>
                <li>
                    <a href="{{ route('manajemen-menu.sub-menu') }}"
                        class="{{ request()->is('dashboard/dashboard-sub-menu') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-albums"></i>
                        Dashboard Sub Menu
                    </a>
                </li>
                <li class="app-sidebar__heading">Manajemen Pengguna</li>
                <li>
                    <a href="{{ route('manajemen-pengguna.pengguna') }}"
                        class="{{ request()->is('dashboard/manajemen-pengguna/pengguna') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Akun Pengguna
                    </a>
                </li>
                <li>
                    <a href="{{ route('manajemen-pengguna.role-dan-hak-akses') }}"
                        class="{{ request()->is('dashboard/manajemen-pengguna/role-dan-hak-akses') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Role dan Hak Akses
                    </a>
                </li>
                <li class="app-sidebar__heading">Pegawai</li>
                <li>
                    <a href="{{ route('pegawai.data-pegawai') }}"
                        class="{{ request()->is('dashboard/pegawai/data-pegawai') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paper-plane"></i>
                        Data Pegawai
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
