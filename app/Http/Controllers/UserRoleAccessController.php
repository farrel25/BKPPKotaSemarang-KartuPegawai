<?php

namespace App\Http\Controllers;

use App\UserRoleAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Role::create([
            'name' => $request->name
        ]);

        Alert::success('Berhasil', 'Role baru berhasil ditambahkan');
        return back();
    }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserRoleAccess  $UserRoleAccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $role = Role::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $attr['name'] = $request->name;

        $role->update($attr);

        Alert::success('Berhasil', 'Role berhasil diperbarui');
        return back();
    }

    public function updateRolePermission(Request $request, Role $role)
    {
        // $role->permissions()->sync($request->permission_id);
        $role->syncPermissions($request->permission_id);

        Alert::success('Berhasil', 'Hak akses berhasil diperbarui');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserRoleAccess  $UserRoleAccess
     * @return \Illuminate\Http\Response
     */
    public function destroyRole(Role $role)
    {
        $role->delete();

        Alert::success('Berhasil', 'Role berhasil dihapus');
        return back();
    }
}
