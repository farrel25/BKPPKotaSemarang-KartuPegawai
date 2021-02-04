<?php

namespace App\Http\Controllers;

use App\UserRoleAccess;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRoleAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('dashboard.manajemen_pengguna.role_dan_hak_akses.role-dan-hak-akses', compact('roles', 'permissions'));
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
    //  * @param  \App\UserRoleAccess  $UserRoleAccess
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(UserRoleAccess $UserRoleAccess)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\UserRoleAccess  $UserRoleAccess
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(UserRoleAccess $UserRoleAccess)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\UserRoleAccess  $UserRoleAccess
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, UserRoleAccess $UserRoleAccess)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\UserRoleAccess  $UserRoleAccess
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(UserRoleAccess $UserRoleAccess)
    // {
    //     //
    // }
}
