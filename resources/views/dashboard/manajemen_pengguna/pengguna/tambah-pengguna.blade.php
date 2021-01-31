@extends('dashboard.layouts.master', ['title' => "Tambah Pengguna"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-plus",
        'judul' => "Tambah Pengguna ",
        'link' => route('manajemen-pengguna.pengguna') ,
        'page1' => "Pengguna"
    ]
?>
@include('dashboard.layouts.page-title',$data)


@endsection
