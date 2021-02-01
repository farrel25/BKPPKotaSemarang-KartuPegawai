<?php

namespace App\Http\Controllers;

use Alert;
use App\DashboardMenu;
use Illuminate\Http\Request;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DashboardMenu::get();
        return view('dashboard.manajemen_menu.dashboard_menu.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string'
        ]);

        DashboardMenu::create($attr);

        return redirect()->route('manajemen-menu.menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardMenu $dashboardMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardMenu $dashboardMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardMenu $dashboardMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardMenu $dashboardMenu)
    {
        $dashboardMenu->delete();
        Alert::success('Berhasil', 'Akun Pengguna berhasil dihapus');
        return redirect()->route('manajemen-menu.menu');
    }
}