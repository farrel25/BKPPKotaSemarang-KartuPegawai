@extends('dashboard.layouts.master', ['title' => "Pengguna "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-network",
        'judul' => "Role dan Hak Akses ",
        'link' => route('manajemen-pengguna.role-dan-hak-akses') ,
        'page1' => "Role dan Hak Akses "
    ]
?>
@include('dashboard.layouts.page-title',$data)


@endsection
