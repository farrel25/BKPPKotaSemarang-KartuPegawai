@extends('dashboard.layouts.master', ['title' => "Edit Kartu Pegawai"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-note",
        'judul' => "Edit Kartu Pegawai ",
        'link' => route('kartu-pegawai.pengajuan-kartu-pegawai') ,
        'page1' => "Pengajuan Kartu Pegawai"
    ]
?>
@include('dashboard.layouts.page-title',$data)



@endsection
