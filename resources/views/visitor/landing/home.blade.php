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
                <a class="btn btn-light" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-11 info-services">
            <div class="row">
                <div class="col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2 ">
                    <h3> 24 jam</h3>
                    <p class="float-left"> Layanan pengajuan pembuatan kartu pegawai tersedia 24 jam</p>
                </div>
                <div class="col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-2.png" class="float-left mr-2">
                    <h3> Cepat</h3>
                    <p class="float-left"> Pembuatan kartu pegawai diproses secepat mungkin dan dapat diambil dengan
                        segera</p>
                </div>
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2">
                    <h3> Akurat</h3>
                    <p class="float-left"> Terjamin tidak ada kesalahan pencetakan selama data yang dikirim sesuai</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row">
        <h1 class="mb-5 text-center" style="font-weight: 700; color: #373139;" data-aos="fade-up"
            data-aos-duration="2000">
            -Persyaratan dan Pembuatan-
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-11 bg-activity mr-lg-3 mb-3" data-aos="fade-right" data-aos-duration="2000"
            data-aos-delay="500">
            <h3>Pengajuan Kartu Pegawai</h3>
            <p>1. Fotokopi SK CPNS dilegalisir</p>
            <p>2. Fotokopi SAH SK PNS dilegalisir</p>
            <p>3. Foto 3x4</p>
            <p>4. Fotokopi STTPL dilegalisir</p>
            @auth
            <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#pengajuan"
                data-whatever="@mdo">Buat</a>
            @else
            <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#alert"
                data-whatever="@mdo">Buat</a>
            @endauth
        </div>
        <div class="col-lg-4 col-11 bg-activity ml-lg-3 mb-3" data-aos="fade-left" data-aos-duration="2000"
            data-aos-delay="500">
            <h3>Penggantian Karena Hilang</h3>
            <p>1. Fotokopi SK CPNS dilegalisir</p>
            <p>2. Fotokopi SAH SK PNS dilegalisir</p>
            <p>3. Foto 3x4</p>
            <p>4. Fotokopi STTPL dilegalisir</p>
            <p>5. Surat Keterangan Hilang dari Kepolisian</p>
            @auth
            <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#penggantian"
                data-whatever="@mdo">Buat</a>
            @else
            <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#alert"
                data-whatever="@mdo">Buat</a>
            @endauth
        </div>
    </div>
</div>


@endsection
