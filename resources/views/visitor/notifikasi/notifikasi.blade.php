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
                            <h5 class="mt-4" style="font-weight: 700;">NIP {{ Auth::user()->employee->nip }}</h5>
                            <hr>
                            <table class="table table-borderless">
                                <tr class="">
                                    <td> Username </td>
                                    <td class=" ">:</td>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <td> Nama </td>
                                    <td>:</td>
                                    <td>{{ Auth::user()->employee->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Email </td>
                                    <td>:</td>
                                    <td>{{ Auth::user()->email }}</td>
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


<div class="container mb-5" id="card-process">
    <div class="row  justify-content-center " id="notification">
        <div class="col-lg-12 ">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="proses" role="tabpanel" aria-labelledby="proses-tab">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card ">
                                <div class="card-body ">
                                    <h5 style="font-weight: 700;">Status Pengajuan</h5>
                                    <hr>
                                    @if ($proposal->sk_cpns_acc == null && $proposal->sk_pns_acc == null &&
                                    $proposal->sttpl_acc == null && $proposal->photo_acc == null)
                                    <h6> <i class=" fa fa-arrow-circle-up mr-2"></i> Pengajuan </h6>
                                    <hr>
                                    @elseif($proposal->is_diambil == 1)
                                    <h6> <i class=" fa fa-check-circle mr-2"></i> Selesai </h6>
                                    <hr>
                                    @elseif($proposal->is_dicetak == 1)
                                    <h6> <i class=" fa fa-hand-holding mr-2"></i> Pengambilan </h6>
                                    <hr>
                                    @elseif($proposal->sk_cpns_acc == 1 && $proposal->sk_pns_acc == 1 &&
                                    $proposal->sttpl_acc == 1 && $proposal->photo_acc == 1)
                                    <h6> <i class=" fa fa-print mr-2"></i> Dicetak </h6>
                                    <hr>
                                    @elseif($proposal->sk_cpns_acc == null || $proposal->sk_pns_acc == null ||
                                    $proposal->sttpl_acc == null || $proposal->photo_acc == null)
                                    <h6> <i class=" fa fa-tasks mr-2"></i> Revisi </h6>
                                    <hr>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-body ">
                                    <h5 style="font-weight: 700;">Revisi</h5>
                                    <hr>
                                    @if ($proposal->sk_cpns_acc == null && $proposal->sk_pns_acc == null &&
                                    $proposal->sttpl_acc == null && $proposal->photo_acc == null)
                                    <h6>Tidak ada Revisi</h6>
                                    <hr>
                                    @elseif($proposal->is_diambil == 1)
                                    <h6>Tidak ada Revisi</h6>
                                    <hr>
                                    @elseif($proposal->is_dicetak == 1)
                                    <h6>Tidak ada Revisi</h6>
                                    <hr>
                                    @elseif($proposal->sk_cpns_acc == 1 && $proposal->sk_pns_acc == 1 &&
                                    $proposal->sttpl_acc == 1 && $proposal->photo_acc == 1)
                                    <h6>Tidak ada Revisi</h6>
                                    <hr>
                                    @else
                                        @if ($proposal->sk_cpns_acc == null)
                                        <table class="table table-borderless">
                                            <tr class="">
                                                <td class=" d-block"> File </td>
                                                <td>:</td>
                                                <td class="text-danger"> Scan SK PNS</td>
                                            </tr>
                                            {{-- <tr>
                                                <td> Pesan </td>
                                                <td>:</td>
                                                <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna
                                                    aliqua.
                                                </td>
                                            </tr> --}}
                                        </table>
                                        <hr>
                                        @endif
                                        @if ($proposal->sk_pns_acc == null)
                                        <table class="table table-borderless">
                                            <tr class="">
                                                <td class=" d-block"> File </td>
                                                <td>:</td>
                                                <td class="text-danger"> Scan SK PNS</td>
                                            </tr>
                                            {{-- <tr>
                                                <td> Pesan </td>
                                                <td>:</td>
                                                <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna
                                                    aliqua.</td>
                                                </tr> --}}
                                        </table>
                                        <hr>
                                        @endif
                                        @if ($proposal->sttpl_acc == null)
                                        <table class="table table-borderless">
                                            <tr class="">
                                                <td class=" d-block"> File </td>
                                                <td>:</td>
                                                <td class="text-danger"> Scan STTPL</td>
                                            </tr>
                                            {{-- <tr>
                                                <td> Pesan </td>
                                                <td>:</td>
                                                <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna
                                                    aliqua.</td>
                                            </tr> --}}
                                        </table>
                                        <hr>
                                        @endif
                                        @if ($proposal->photo_acc == null)
                                        <table class="table table-borderless">
                                            <tr class="">
                                                <td class=" d-block"> File </td>
                                                <td>:</td>
                                                <td class="text-danger"> Foto 3x4</td>
                                            </tr>
                                            {{-- <tr>
                                                <td> Pesan </td>
                                                <td>:</td>
                                                <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna
                                                    aliqua.</td>
                                            </tr> --}}
                                        </table>
                                        <hr>
                                        @endif
                                        @if ($proposal->sk_hilang != null && $proposal->sk_hilang_acc == null)
                                        <table class="table table-borderless">
                                            <tr class="">
                                                <td class=" d-block"> File </td>
                                                <td>:</td>
                                                <td class="text-danger"> SK Kehilangan</td>
                                            </tr>
                                            {{-- <tr>
                                                <td> Pesan </td>
                                                <td>:</td>
                                                <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna
                                                    aliqua.</td>
                                            </tr> --}}
                                        </table>
                                        <hr>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card ">
                                <div class="card-body ">
                                    <h5 style="font-weight: 700;">Upload File</h5>
                                    <hr>
                                    @if ($proposal->sk_cpns_acc == null && $proposal->sk_pns_acc == null &&
                                    $proposal->sttpl_acc == null && $proposal->photo_acc == null)
                                    <h6>Tidak ada yang perlu diupload</h6>
                                    <hr>
                                    @elseif($proposal->is_diambil == 1)
                                    <h6>Tidak ada yang perlu diupload</h6>
                                    <hr>
                                    @elseif($proposal->is_dicetak == 1)
                                    <h6>Tidak ada yang perlu diupload</h6>
                                    <hr>
                                    @elseif($proposal->sk_cpns_acc == 1 && $proposal->sk_pns_acc == 1 &&
                                    $proposal->sttpl_acc == 1 && $proposal->photo_acc == 1)
                                    <h6>Tidak ada yang perlu diupload</h6>
                                    <hr>
                                    @else
                                    @if ($proposal->sk_cpns_acc == null)
                                    <div class="form-group mb-3 ">
                                        <label for="sk_cpns" class="mb-2 text-danger">Scan SK CPNS </label>
                                        <input name="sk_cpns" id="sk_cpns" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    @endif
                                    @if ($proposal->sk_pns_acc == null)
                                    <div class="form-group mb-3">
                                        <label for="sk_pns" class="mb-2 text-danger">Scan SK PNS </label>
                                        <input name="sk_pns" id="sk_pns" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    @endif
                                    @if ($proposal->sttpl_acc == null)
                                    <div class="form-group mb-3">
                                        <label for="sttpl" class="mb-2 text-danger">Scan STTPL</label>
                                        <input name="sttpl" id="sttpl" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    @endif
                                    @if ($proposal->photo_acc == null)
                                    <div class="form-group mb-3 ">
                                        <label for="photo" class="mb-2 text-danger">Foto 3x4</label>
                                        <input name="photo" id="photo" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    <hr>
                                    @endif
                                    @if ($proposal->sk_hilang != null && $proposal->sk_hilang_acc == null)
                                    <div class="form-group mb-3">
                                        <label for="sk_hilang" class="mb-2 text-danger">Surat Keterangan Hilang dari
                                            Kepolisian</label>
                                        <input name="sk_hilang" id="sk_hilang" type="file" class="form-control-file">
                                        <br>
                                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                                        <br>
                                    </div>
                                    @endif
                                    @endif
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
