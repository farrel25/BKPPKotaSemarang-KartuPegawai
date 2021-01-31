<?php

namespace App\Http\Controllers;

use App\HistoryEmployeeCard;
use Illuminate\Http\Request;

class HistoryEmployeeCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kartu_pegawai.kartu_pegawai_selesai.kartu-pegawai-selesai');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
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
    //  * @param  \App\HistoryEmployeeCard  $HistoryEmployeeCard
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(HistoryEmployeeCard $HistoryEmployeeCard)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\HistoryEmployeeCard  $HistoryEmployeeCard
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(HistoryEmployeeCard $HistoryEmployeeCard)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\HistoryEmployeeCard  $HistoryEmployeeCard
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, HistoryEmployeeCard $HistoryEmployeeCard)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\HistoryEmployeeCard  $HistoryEmployeeCard
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(HistoryEmployeeCard $HistoryEmployeeCard)
    // {
    //     //
    // }
}