@extends('visitor.layouts.master', ['title' => 'Kartu Pegawai'])

@section('content')

<div class="jumbotron jumbotron-fluid bg-header">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-11 m-auto bg-glass">
                <h1 class="display-4">KARTU PEGAWAI</h1>
                <p class="lead ml-2 mr-2 ml-lg-5 mr-lg-5 d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Nisi, gravida sit quislacus. Et porta ut duis etiam nullam ac. Id posuere ut pretium justo
                    ultrices eu.Tempor elit lacinia ut ultrices enim nisl felis enim, nunc.</p>
                <a class="btn btn-light" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-11 info-services">
            <div class="row">
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2">
                    <h3> Service 1</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</p>
                </div>
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-2.png" class="float-left mr-2">
                    <h3> Service 1</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</p>
                </div>
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2">
                    <h3> Service 1</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <h1 class="mb-5 text-center" style="font-weight: 600">- Pesyaratan dan Pembuatan-</h1>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-11 bg-activity mr-lg-3 mb-3">
            <h3>Pengajuan Kartu
                Pegawai</h3>
            <p>1. Fotokopi SK CPNS dilegalisir</p>
            <p>2. Fotokopi SAH SK PNS dilegalisir</p>
            <p>3. Foto 3x4 (2 lembar)</p>
            <p>4. Fotokopi STTPL dilegalisir</p>
            <a class="btn btn-primary" href="#" role="button">Buat</a>
        </div>
        <div class="col-lg-4 col-11 bg-activity ml-lg-3 mb-3">
            <h3>Pengajuan Kartu
                Pegawai</h3>
            <p>1. Fotokopi SK CPNS dilegalisir</p>
            <p>2. Fotokopi SAH SK PNS dilegalisir</p>
            <p>3. Foto 3x4 (2 lembar)</p>
            <p>4. Fotokopi STTPL dilegalisir</p>
            <a class="btn btn-primary" href="#" role="button">Buat</a>
        </div>
    </div>
</div>
@endsection
