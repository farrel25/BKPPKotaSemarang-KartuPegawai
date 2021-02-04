@extends('visitor.layouts.master', ['title' => 'Kartu Pegawai'])

@section('content')

<div class="jumbotron jumbotron-fluid bg-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-11 m-auto bg-glass" data-aos="zoom-in" data-aos-duration="1500">
                <h1 class="display-4">KARTU PEGAWAI</h1>
                <p class="lead ml-2 mr-2 ml-lg-5 mr-lg-5 d-lg-block">
                    Melayani pengajuan pembuatan Kartu Pegawai baru maupun penggantian kartu pegawai karena hilang bagi
                    Pegawai Balaikota Semarang
                </p>
                <a class="btn btn-light scrollto" href="#make-card" role="button">Buat Sekarang</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-11 info-services">
            <div class="row">
                <div class="col-lg " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2 ">
                    <h3> 24 jam</h3>
                    <p class="float-left"> Layanan pengajuan pembuatan kartu pegawai tersedia 24 jam</p>
                </div>
                <div class="col-lg" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500">
                    <img src="{{ asset('/visitor/images') }}/service-2.png" class="float-left mr-2">
                    <h3> Cepat</h3>
                    <p class="float-left"> Pembuatan kartu pegawai diproses secepat mungkin dan dapat diambil dengan
                        segera</p>
                </div>
                <div class=" col-lg " data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
                    <img src="{{ asset('/visitor/images') }}/service-3.png" class="float-left mr-2">
                    <h3> Akurat</h3>
                    <p class="float-left"> Terjamin tidak ada kesalahan pencetakan selama data yang dikirim sesuai</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="tata-cara" class="tata-cara mb-5 ">
    <div class="container ">
        <div class="section-title" data-aos="fade-up">
            <h2>Tata cara</h2>
            <p>Jika masih kebingungan bisa download file "Detail Penggunaan"</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <ol>
                    <li data-aos="fade-up" data-aos-delay="100">Buat akun</li>
                    <li data-aos="fade-up" data-aos-delay="200">Login</li>
                    <li data-aos="fade-up" data-aos-delay="300">Siapkan file persyaratan sesuai dengan yang diajukan
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">Siapkan file pas foto 3x4</li>
                    <li data-aos="fade-up" data-aos-delay="500">Jika ada kesalahan upload atau ada ketidaksesuaian akan
                        ada notifikasi untuk revisi </li>
                    <li data-aos="fade-up" data-aos-delay="600">Status pembuatan kartu pegawai bisa dilihat di
                        notifikasi</li>
                </ol>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card " data-aos="fade-up" data-aos-delay="1000">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 600">Detail Penggunaan</h5>
                        <p class="card-text">Berisikan file PDF tutorial dalam penggunaan website.</p>
                        <a href="#" class="btn btn-secondary"> <i class="fa fa-download"></i> Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="make-card">
    <div class="container ">
        <div class="section-title" data-aos="fade-up">
            <h2>Pembuatan</h2>
            <p>Upload file sesuai dengan aslinya</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-11 bg-activity mr-lg-3 mb-3" data-aos="fade-right" data-aos-duration="2000"
                data-aos-delay="500">
                <h3>Pengajuan Kartu Pegawai</h3>
                <ul>
                    <li>Scan SK CPNS </li>
                    <li>Scan SAH SK PNS </li>
                    <li>Foto 3x4</li>
                    <li>Scan STTPL </li>
                </ul>
                @auth
                @if ($isProposalBeingProcessed)
                <div id="proposal-processed1" class="btn btn-activity">Buat</div>
                @else
                <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#pengajuan"
                    data-whatever="@mdo">Buat</a>
                @endif
                @else
                <div id="please-login1" class="btn btn-activity">Buat</div>
                @endauth
            </div>

            <div class="col-lg-4 col-11 bg-activity ml-lg-3 mb-3" data-aos="fade-left" data-aos-duration="2000"
                data-aos-delay="500">
                <h3>Penggantian Karena Hilang</h3>
                <ul>
                    <li>Scan SK CPNS </li>
                    <li>Scan SAH SK PNS </li>
                    <li>Foto 3x4</li>
                    <li>Scan STTPL </li>
                    <li>Surat Keterangan Hilang dari Kepolisian</li>
                </ul>

                @auth
                @if ($isProposalBeingProcessed)
                <div id="proposal-processed2" class="btn btn-activity">Buat</div>
                @else
                <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#penggantian"
                    data-whatever="@mdo">Buat</a>
                @endif
                @else
                <div id="please-login2" class="btn btn-activity">Buat</div>
                @endauth
            </div>
        </div>
    </div>
</section>

<section id="faq" class="faq">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Pertanyaan</h2>
            {{-- <p>Pertanyaan yang sering muncul</p> --}}
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-5">
                <i class="ri-question-line"></i>
                <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            </div>
            <div class="col-lg-7">
                <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
            </div>
        </div>
        <!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-5">
                <i class="ri-question-line"></i>
                <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            </div>
            <div class="col-lg-7">
                <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                    laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                    Est pellentesque elit ullamcorper dignissim.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    $("#proposal-processed1").click(function() {
        Swal.fire({
            title: 'Pemberitahuan',
            text: 'Kartu pegawai anda sedang diproses',
            icon: 'info',
            confirmButtonText: 'tutup'
        });
    });

    $("#proposal-processed2").click(function() {
        Swal.fire({
            title: 'Pemberitahuan',
            text: 'Kartu pegawai anda sedang diproses',
            icon: 'info',
            confirmButtonText: 'tutup'
        });
    });

    $("#please-login1").click(function() {
        Swal.fire({
            title: 'Perhatian',
            text: 'Silahkan login terlebih dahulu',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Login',
            cancelButtonText: 'Batal',
            reverseButtons: true
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = '{{route('login')}}';
            }
        });
    });

    $("#please-login2").click(function() {
        Swal.fire({
            title: 'Perhatian',
            text: 'Silahkan login terlebih dahulu',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Login',
            cancelButtonText: 'Batal',
            reverseButtons: true
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = '{{route('login')}}';
            }
        });
    });
</script>

@endsection
