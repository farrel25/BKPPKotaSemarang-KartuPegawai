@extends('dashboard.layouts.master', ['title' => 'KarPeg - Dashboard'])

@section('content')
<?php
    $data=[
        'icon' => "pe-7s-rocket",
        'judul' => "Dashboard",
        'link' => route('dashboard') ,
        'page1' => "Dashboard",
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Pegawai</div>
                    <div class="widget-subheading">Total Pegawai</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$countEmployees}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-plum-plate  ">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Pengguna</div>
                    <div class="widget-subheading">Total Pengguna</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$countUsers}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-strong-bliss   ">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Pengajuan </div>
                    <div class="widget-subheading">Total Pengajuan Kartu</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$countProposals}}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="no-gutters row">
                <div class="col-md-4">
                    <div class="widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-right ml-0 mr-3">
                                <div class="widget-numbers text-success">10</div>
                            </div>
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Artikel</div>
                                <div class="widget-subheading">Total Keseluruhan Artikel</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-right ml-0 mr-3">
                                <div class="widget-numbers text-warning">8</div>
                            </div>
                            <div class="widget-content-left">
                                <div class="widget-heading">Artikel Aktif</div>
                                <div class="widget-subheading">Total Artikel Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-right ml-0 mr-3">
                                <div class="widget-numbers text-danger">2</div>
                            </div>
                            <div class="widget-content-left">
                                <div class="widget-heading">Artikel Tidak Aktif</div>
                                <div class="widget-subheading">Total Artikel Tidak Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> --}}
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i> Penduduk
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-eg-55">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="pt-2 card-body">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class=" mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Kartu Pegawai</div>
                                                        <div class="widget-subheading">Jumlah Pengajuan + Diproses +
                                                            Pengambilan + Selesai </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-danger">{{$countProposals}}</div>
                                                    </div>
                                                </div>
                                                <div class="widget-progress-wrapper">
                                                    <div class="progress-bar-lg progress-bar-animated progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class=" mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Belum Diproses</div>
                                                        <div class="widget-subheading">Total Kartu Belum Diproses</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-secondary">{{$countProposalIn}}</div>
                                                    </div>
                                                </div>
                                                <div class="widget-progress-wrapper">
                                                    <div class="progress-bar-lg progress-bar-animated progress">
                                                        <div class="progress-bar progress-bar-animated bg-secondary progress-bar-striped"
                                                            role="progressbar" aria-valuenow="{{$percentageProposalIn}}" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: {{$percentageProposalIn}}%;">{{$percentageProposalIn}}%
                                                        </div>
                                                    </div>
                                                    <div class="progress-sub-label">
                                                        <div class="sub-label-left">persentase</div>
                                                        <div class="sub-label-right">100%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class=" mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Diproses</div>
                                                        <div class="widget-subheading">Total Kartu Dalam Pencetakan
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-alternate">{{$countProposalProcess}}</div>
                                                    </div>
                                                </div>
                                                <div class="widget-progress-wrapper">
                                                    <div class="progress-bar-lg progress-bar-animated progress">
                                                        <div class="progress-bar progress-bar-animated bg-alternate progress-bar-striped"
                                                            role="progressbar" aria-valuenow="{{$percentageProposalProcess}}" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: {{$percentageProposalProcess}}%;">{{$percentageProposalProcess}}%</div>
                                                    </div>
                                                    <div class="progress-sub-label">
                                                        <div class="sub-label-left">persentase</div>
                                                        <div class="sub-label-right">100%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class=" mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Pengambilan</div>
                                                        <div class="widget-subheading">Total Kartu Belum Diambil</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-warning">{{$countProposalPrinted}}</div>
                                                    </div>
                                                </div>
                                                <div class="widget-progress-wrapper">
                                                    <div class="progress-bar-lg progress-bar-animated progress">
                                                        <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped"
                                                            role="progressbar" aria-valuenow="{{$percentageProposalPrinted}}" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: {{$percentageProposalPrinted}}%;">{{$percentageProposalPrinted}}%
                                                        </div>
                                                    </div>
                                                    <div class="progress-sub-label">
                                                        <div class="sub-label-left">persentase</div>
                                                        <div class="sub-label-right">100%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class=" mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Selesai</div>
                                                        <div class="widget-subheading">Total Kartu Sudah Diambil</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-success">{{$countProposalFinished}}</div>
                                                    </div>
                                                </div>
                                                <div class="widget-progress-wrapper">
                                                    <div class="progress-bar-lg progress-bar-animated progress">
                                                        <div class="progress-bar progress-bar-animated bg-success progress-bar-striped"
                                                            role="progressbar" aria-valuenow="{{$percentageProposalFinished}}" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: {{$percentageProposalFinished}}%;">{{$percentageProposalFinished}}%</div>
                                                    </div>
                                                    <div class="progress-sub-label">
                                                        <div class="sub-label-left">persentase</div>
                                                        <div class="sub-label-right">100%</div>
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
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        //Penduduk
            var ctx = document.getElementById("penduduk").getContext('2d');
            var data = {
                datasets: [{
                    data: [ 75, 25],
                    backgroundColor: [
                        '#3ac47d',
                        '#f7b924',
                    ],
                }],
                labels: [
                    'Aktif',
                    'Tidak Aktif',
                ]
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: {
                    display: false
                    },
                }
            });

        });

</script>
@endsection
