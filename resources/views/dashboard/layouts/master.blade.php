<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}

    <title>{{ $title ?? 'Dashboard' }}</title>

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="BKPP Kota Semarang - Kartu Pegawai - Dashboard" />
    <meta name="msapplication-tap-highlight" content="no" />

    <!-- Main CSS File -->
    <link href="{{ asset('/admin') }}/css/main.css" rel="stylesheet" />
    <link href="{{ asset('/admin') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/helper.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <script src="http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="{{ asset('/vendor') }}/sweetalert/sweetalert.all.js"></script>



</head>

<body>
    @include('sweetalert::alert')

    @include('dashboard.layouts.modal')
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('dashboard.layouts.navbar')
        <div class="app-main">
            @include('dashboard.layouts.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                    <div class="row">
                        <div class="scrollbar-container">
                        </div>
                    </div>
                </div>
                @include('dashboard.layouts.footer')
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>

    {{-- Option 2: jQuery, Popper.js, and Bootstrap JS --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script> --}}

    <!-- Main JS File -->
    <script type="text/javascript" src="{{ asset('/admin') }}/js/main.js"></script>
    <script src="{{ asset('/vendor') }}/sweetalert/sweetalert.all.js"></script>

</body>

</html>
