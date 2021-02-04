@extends('visitor.layouts.master', ['title' => 'Kartu Pegawai'])

@section('content')

<style>
    body {
        background-color: #f5f5f5;
    }

    #pertanyaan,
    #tutorial {
        display: none;
    }

    #header .logo h1 a span,
    .nav-menu .drop-down a {
        color: #373139 !important;
    }

    .nav-menu .drop-down a:hover {
        color: #fbb448 !important;
    }
</style>


<div class="container" id="notification" style="margin-top: 100px;">
    <div class="row  justify-content-center ">
        <div class="col-lg-8 bg-notif mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 p-4">
                            <img src="{{ asset('/visitor/images') }}/profile-picture.png" alt=""
                                class="float-left img-profile">
                        </div>
                        <div class="col-md-8">
                            <h5 class="mt-4" style="font-weight: 700;">NIP</h5>
                            <hr>
                            <table class="table table-borderless">
                                <tr class="">
                                    <td> Username </td>
                                    <td class=" ">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Nama </td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Email </td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                            <hr>
                            <a href="#" class="card-link"> <i class=" fa fa-lock mr-2"></i>Ubah Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 p-4">
                            <img src="{{ asset('/visitor/images') }}/example-card.png" alt=""
                                class="float-left img-card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-4 " id="card-process">
    <div class="row  justify-content-center " id="notification">
        <div class="col-lg-12 ">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="proses" role="tabpanel" aria-labelledby="proses-tab">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card ">
                                <div class="card-body ">
                                    <h6> <i class=" fa fa-arrow-circle-up mr-2"></i> Pengajuan </h6>
                                    <hr>
                                    <h6> <i class=" fa fa-tasks mr-2"></i> Diproses </h6>
                                    <hr>
                                    <h6> <i class=" fa fa-print mr-2"></i> Dicetak </h6>
                                    <hr>
                                    <h6> <i class=" fa fa-hand-holding mr-2"></i> Pengambilan </h6>
                                    <hr>
                                    <h6> <i class=" fa fa-check-circle mr-2"></i> Selesai </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-body ">
                                    <h5 style="font-weight: 700;">Revisi</h5>
                                    <hr>
                                    <table class="table table-borderless">
                                        <tr class="">
                                            <td class=" d-block"> File </td>
                                            <td>:</td>
                                            <td class="text-danger"> Scan SK PNS</td>
                                        </tr>
                                        <tr>
                                            <td> Pesan </td>
                                            <td>:</td>
                                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat. Duis
                                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <table class="table table-borderless">
                                        <tr class="">
                                            <td class=" d-block"> File </td>
                                            <td>:</td>
                                            <td class="text-danger"> Scan SK PNS</td>
                                        </tr>
                                        <tr>
                                            <td> Pesan </td>
                                            <td>:</td>
                                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat. Duis
                                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card ">
                                <div class="card-body ">
                                    <h5 style="font-weight: 700;">Upload File</h5>
                                    <hr>
                                    <div class="form-group mb-3 ">
                                        <label for="#" class="mb-2 text-success">Scan SK PNS </label>
                                        <input name="#" id="#" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    <div class="form-group mb-3">
                                        <label for="#" class="mb-2 text-danger">Scan SK CPNS </label>
                                        <input name="#" id="#" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    <div class="form-group mb-3 ">
                                        <label for="#" class="mb-2 text-success">Foto 3x4</label>
                                        <input name="#" id="#" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    <div class="form-group mb-3">
                                        <label for="#" class="mb-2 text-success">Scan STTPL</label>
                                        <input name="#" id="#" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    <div class="form-group mb-3">
                                        <label for="#" class="mb-2 text-danger">Surat Keterangan Hilang dari
                                            Kepolisian</label>
                                        <input name="#" id="#" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
