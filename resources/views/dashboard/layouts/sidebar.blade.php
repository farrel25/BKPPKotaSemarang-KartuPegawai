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
                <li class="app-sidebar__heading">Menu Utama</li>
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
                    <a href="#">
                        <i class="metismenu-icon pe-7s-download"></i>
                        Pengajuan Kartu Pegawai
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-print"></i>
                        Kartu dicetak
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Kartu diambil
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
                        <i class=" metismenu-icon pe-7s-user"></i>
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
                    <a href="{{ route('pegawai.pengajuan-pegawai') }}"
                        class="{{ request()->is('dashboard/pegawai/pengajuan-pegawai') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Pengajuan Kartu Pegawai
                    </a>
                </li>
                {{-- <li class="app-sidebar__heading">UI Components</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Elements
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon"> </i>Dropdowns
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html">
                                <i class="metismenu-icon"> </i>Icons
                            </a>
                        </li>
                        <li>
                            <a href="elements-badges-labels.html">
                                <i class="metismenu-icon"> </i>Badges
                            </a>
                        </li>
                        <li>
                            <a href="elements-cards.html">
                                <i class="metismenu-icon"> </i>Cards
                            </a>
                        </li>
                        <li>
                            <a href="elements-list-group.html">
                                <i class="metismenu-icon"> </i>List Groups
                            </a>
                        </li>
                        <li>
                            <a href="elements-navigation.html">
                                <i class="metismenu-icon"> </i>Navigation Menus
                            </a>
                        </li>
                        <li>
                            <a href="elements-utilities.html">
                                <i class="metismenu-icon"> </i>Utilities
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
