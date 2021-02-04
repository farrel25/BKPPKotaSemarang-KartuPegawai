@extends('dashboard.layouts.master', ['title' => "Edit Kartu Pegawai"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Kartu Pegawai ",
        'link' => route('kartu-pegawai.pengajuan-kartu-pegawai') ,
        'page1' => "Pengajuan Kartu Pegawai",
        'page2' => "/ Edit",
        'page3' => "/ $employee->nama"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">
                    File Persyaratan
                </h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="row">
                    <div class=" col-lg-2 mb-2 mt-1">
                        <h4 class="card-title font-weight-bold">Data Pegawai</h4>
                        <hr>
                    </div>
                    <div class=" col-lg-10 ">
                        <div class="row">
                            <div class="col-md-2">
                                <p>id pengajuan</p>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $proposal->id }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>NIP</p>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $employee->nip }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Nama Lengkap</p>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $employee->nama }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Email</p>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $proposal->user->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div tabindex="-1" class="dropdown-divider"></div>

                <div class="row">
                    <div class=" col-lg-2 mb-2 mt-1">
                        <h4 class="card-title font-weight-bold">Data Upload</h4>
                        <hr>
                    </div>

                    <div class="col-lg-10">
                        <form action="{{ route('kartu-pegawai.update', $proposal->id) }}" method="post">
                            @csrf
                            @method('patch')

                            <div class="no-gutters row">

                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">SK CPNS</div>
                                                        <div class="form-check mt-2">
                                                            <input id="sk_cpns_acc" name="sk_cpns_acc" type="checkbox" value="1"
                                                                class="form-check-input" {{ $proposal->sk_cpns_acc == null ? '':'checked' }}>
                                                            <label class="form-check-label" for="sk_cpns_acc">
                                                                Benar
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <button class=" btn btn-secondary">
                                                            <i class=" fa fa-download"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">SK PNS</div>
                                                        <div class="form-check mt-2">
                                                            <input id="sk_pns_acc" name="sk_pns_acc" type="checkbox" value="1"
                                                                class="form-check-input" {{ $proposal->sk_pns_acc == null ? '':'checked' }}>
                                                            <label class="form-check-label" for="sk_pns_acc">
                                                                Benar
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <button class=" btn btn-secondary"> <i
                                                                class=" fa fa-download"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">STTPL</div>
                                                        <div class="form-check mt-2">
                                                            <input id="sttpl_acc" name="sttpl_acc" type="checkbox" value="1"
                                                                class="form-check-input" {{ $proposal->sttpl_acc == null ? '':'checked' }}>
                                                            <label class="form-check-label" for="sttpl_acc">
                                                                Benar
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right"><button
                                                            class=" btn btn-secondary"> <i
                                                                class=" fa fa-download"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if ($proposal->sk_hilang != null)
                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">SK Hilang</div>
                                                        <div class="form-check mt-2">
                                                            <input id="sk_hilang_acc" name="sk_hilang_acc" type="checkbox" value="1"
                                                                class="form-check-input" {{ $proposal->sk_hilang_acc == null ? '':'checked' }}>
                                                            <label class="form-check-label" for="sk_hilang_acc">
                                                                Benar
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right"><button
                                                            class=" btn btn-secondary"> <i
                                                                class=" fa fa-download"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Foto 3x4</div>
                                                        <div class="form-check mt-2">
                                                            <input id="photo_acc" name="photo_acc" type="checkbox" value="1"
                                                                class="form-check-input" {{ $proposal->photo_acc == null ? '':'checked' }}>
                                                            <label class="form-check-label" for="photo_acc">
                                                                Benar
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right"><button
                                                            class=" btn btn-secondary"> <i
                                                                class=" fa fa-download"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Simpan Data</button>
                            <a href="{{ route('kartu-pegawai.pengajuan-kartu-pegawai') }}" class="mt-2 btn btn-outline-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
