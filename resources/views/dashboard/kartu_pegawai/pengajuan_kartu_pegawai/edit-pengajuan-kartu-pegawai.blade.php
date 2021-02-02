@extends('dashboard.layouts.master', ['title' => "Edit Kartu Pegawai"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Kartu Pegawai ",
        'link' => route('kartu-pegawai.pengajuan-kartu-pegawai') ,
        'page1' => "Pengajuan Kartu Pegawai",
        'page2' => "/ Edit",
        'page3' => "/ Nama Pegawai "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold mb-4 mt-2" style="font-size: large;">File Persyaratan
                </h5>
                <div tabindex="-1" class="dropdown-divider"></div>
                <form action="#">
                    <div class="row">
                        <div class=" col-lg-12 ">
                            <div class="no-gutters row">
                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">SK CPNS</div>
                                                        <div class="form-check mt-2">
                                                            <input id="#" type="checkbox" value="checked"
                                                                class="form-check-input">
                                                            <label class="form-check-label" for="closeButton">
                                                                Benar
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right"><button
                                                            class=" btn btn-secondary">
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
                                                            <input id="#" type="checkbox" value="checked"
                                                                class="form-check-input">
                                                            <label class="form-check-label" for="closeButton">
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
                                                        <div class="widget-heading">Foto 3x4</div>
                                                        <div class="form-check mt-2">
                                                            <input id="#" type="checkbox" value="checked"
                                                                class="form-check-input">
                                                            <label class="form-check-label" for="closeButton">
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
                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Foto 3x4</div>
                                                        <div class="form-check mt-2">
                                                            <input id="#" type="checkbox" value="checked"
                                                                class="form-check-input">
                                                            <label class="form-check-label" for="closeButton">
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
                                <div class="col-md-3 mb-3">
                                    <div class="pt-0 pb-0 card-body">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">SK Hilang</div>
                                                        <div class="form-check mt-2">
                                                            <input id="#" type="checkbox" value="checked"
                                                                class="form-check-input">
                                                            <label class="form-check-label" for="closeButton">
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
                        </div>
                    </div>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="row">
                        <div class=" col-lg-2 mb-2 mt-1">
                            <h4 class="card-title font-weight-bold">Pesan Revisi</h4>
                            <hr>
                        </div>
                        <div class=" col-lg-10 ">
                            <form class="">
                                <div class="position-relative form-group">
                                    <label for="#" class="">Pesan</label>
                                    <textarea name="#" id="#" class="form-control"></textarea>
                                </div>
                            </form>
                            <button type="submit" class="mt-2 btn btn-primary">Simpan Data</button>
                            <a href="#" class="mt-2 btn btn-outline-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
