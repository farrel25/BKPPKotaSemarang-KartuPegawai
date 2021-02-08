<?php

namespace App\Http\Controllers;

use App\DashboardMenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

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
        Permission::create($attr);

        Alert::success('Berhasil', 'Menu baru berhasil ditambahkan');

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
    public function update(Request $request)
    {
        $menu = DashboardMenu::findOrFail($request->menuId);

        $attr = $request->validate([
            'name' => 'required|string'
        ]);

        $menu->update($attr);

        Alert::success('Berhasil', 'Menu berhasil diperbarui');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardMenu $dashboardMenu)
    {
        $permission = Permission::where('name', $dashboardMenu->name)->first();
        // dd($permission);

        $dashboardMenu->delete();
        $permission->delete();

        Alert::success('Berhasil', 'Menu berhasil dihapus');
        return redirect()->route('manajemen-menu.menu');
    }
}
