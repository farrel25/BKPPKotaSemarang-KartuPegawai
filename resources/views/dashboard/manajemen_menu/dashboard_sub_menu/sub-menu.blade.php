@extends('dashboard.layouts.master', ['title' => "Dashboard Sub Menu"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-albums",
        'judul' => "Dashboard Sub Menu ",
        'link' => route('manajemen-menu.sub-menu') ,
        'page1' => "Dashboard Sub Menu "
    ]
?>
@include('dashboard.layouts.page-title',$data)



@endsection
