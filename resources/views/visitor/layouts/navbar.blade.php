<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
            <h1 class="text-light">
                <a href="{{ route('home') }}">
                    <img style=" height: 30px;" src="{{ asset('/images') }}/Lambang_Kota_Semarang.png"
                        class="img-fluid " alt="" />
                    <span style="font-weight: 600" class="ml-1"> BKPP KOTA SEMARANG</span>
                </a>
            </h1>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @auth
                <li class="drop-down ml-auto akun">
                    {{-- <a>Hai, Nama</a> --}}
                    <a>Hai, {{ Auth::user()->username }}</a>
                    <ul>
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li>
                            {{-- <a href="{{ route('logout') }}">Logout</a> --}}
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="btn-masuk"><a href="{{ route('login') }}">Masuk</a></li>
                <li class="btn-daftar"><a href="{{ route('register') }}">Daftar</a></li>
                @endauth
            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->
