<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.notifikasi.notifikasi');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('dashboard.manajemen_pengguna.pengguna.tambah-pengguna');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Notification  $Notification
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Notification $Notification)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Notification  $Notification
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Notification $Notification)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Notification  $Notification
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Notification $Notification)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Notification  $Notification
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Notification $Notification)
    // {
    //     //
    // }
}