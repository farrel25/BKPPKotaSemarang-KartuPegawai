<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('dashboard.manajemen_pengguna.pengguna.pengguna', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manajemen_pengguna.pengguna.tambah-pengguna');
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
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    public function changeRole(Request $request)
    {
        $user = User::findOrFail($request->id);
        $userOldRole = $user->roles->first();
        $userNewRole = Role::findOrFail($request->role_id);
        // dd($userNewRole->name);

        $user->removeRole($userOldRole->name);
        $user->assignRole($userNewRole->name);

        Alert::success('Berhasil', 'Role akun pengguna berhasil diubah');
        return back();
    }

    public function activation(Request $request, User $user)
    {
        $attr = $request->validate([
            'is_active' => 'required|boolean'
        ]);

        $user->update($attr);

        if ($user->is_active == 1) {
            Alert::success('Berhasil', 'Akun pengguna berhasil diaktifkan');
        } else {
            Alert::success('Berhasil', 'Akun pengguna berhasil dinon-aktifkan');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Alert::success('Berhasil', 'Akun pengguna berhasil dihapus');
        return back();
    }
}
