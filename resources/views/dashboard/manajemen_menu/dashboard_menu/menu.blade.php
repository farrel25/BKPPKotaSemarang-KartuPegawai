@extends('dashboard.layouts.master', ['title' => "Dashboard Menu "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-photo-gallery",
        'judul' => "Dashboard Menu ",
        'link' => route('manajemen-menu.menu') ,
        'page1' => "Dashboard Menu "
    ]
?>
@include('dashboard.layouts.page-title',$data)



@endsection
