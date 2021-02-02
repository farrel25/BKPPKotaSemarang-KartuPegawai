<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <title>{{ $title ?? 'BKPP Kota Semarang - Kartu Pegawai' }}</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/icofont/icofont.min.css" />
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/remixicon/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/owl.carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/venobox/venobox.css" />
    <link rel="stylesheet" href="{{ asset('/visitor/vendor') }}/aos/aos.css" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('/visitor') }}/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <!-- Vendor JS Files -->
    <script src="{{ asset('/visitor/vendor') }}/jquery/jquery.min.js"></script>

</head>


<body>
    @include('sweetalert::alert')

    @include('visitor.layouts.modal')

    @include('visitor.layouts.navbar')

    @yield('content')

    @include('visitor.layouts.footer')


    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    {{-- Option 2: jQuery, Popper.js, and Bootstrap JS --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/visitor/vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/php-email-form/validate.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/counterup/counterup.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/venobox/venobox.min.js"></script>
    <script src="{{ asset('/visitor/vendor') }}/aos/aos.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/visitor') }}/js/main.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="{{ asset('/vendor') }}/sweetalert/sweetalert.all.js"></script>
</body>

</html>
