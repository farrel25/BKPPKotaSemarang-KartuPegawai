@extends('dashboard.layouts.master', ['title' => "Pengguna "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-user",
        'judul' => "Pengguna ",
        'link' => route('manajemen-pengguna.pengguna') ,
        'page1' => "Pengguna "
    ]
?>
@include('dashboard.layouts.page-title',$data)



@endsection
