@extends('dashboard.layouts.master', ['title' => "Pengguna "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-user",
        'judul' => "Pengajuan Pegawai ",
        'link' => route('pegawai.pengajuan-pegawai') ,
        'page1' => "Pengajuan Pegawai"
    ]
?>
@include('dashboard.layouts.page-title',$data)


@endsection
