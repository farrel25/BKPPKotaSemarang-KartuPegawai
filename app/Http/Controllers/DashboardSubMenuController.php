<?php

namespace App\Http\Controllers;

use App\DashboardMenu;
use App\DashboardSubMenu;
use Illuminate\Http\Request;

class DashboardSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DashboardMenu::get();
        $subMenus = DashboardSubMenu::paginate(10);
        return view('dashboard.manajemen_menu.dashboard_sub_menu.sub-menu', compact('menus', 'subMenus'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardSubMenu $dashboardSubMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardSubMenu $dashboardSubMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardSubMenu $dashboardSubMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardSubMenu $dashboardSubMenu)
    {
        //
    }
}
