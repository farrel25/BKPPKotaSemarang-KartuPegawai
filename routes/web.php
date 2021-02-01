<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::middleware('permission:Menu Utama')->get('/dashboard', 'DashboardController@index')->name('dashboard');


    // Kartu Pegawai
    Route::middleware('permission:Kartu Pegawai')->prefix('/dashboard/kartu-pegawai')->group(function () {

        // Pengajuan Kartu Pegawai
        Route::get('/pengajuan', 'ProposalController@index')->name('kartu-pegawai.pengajuan-kartu-pegawai');
        Route::get('/tambah-pengajuan-kartu-pegawai', 'ProposalController@create')->name('kartu-pegawai.tambah-pengajuan-kartu-pegawai');
        Route::get('/edit-pengajuan-kartu-pegawai', 'ProposalController@edit')->name('kartu-pegawai.edit-pengajuan-kartu-pegawai');

        // Kartu Pegawai Selesai
        Route::get('/selesai', 'HistoryEmployeeCardController@index')->name('kartu-pegawai.kartu-pegawai-selesai');
    });


    // Pegawai
    Route::middleware('permission:Pegawai')->get('/dashboard/pegawai/data', 'EmployeeController@index')->name('pegawai.data-pegawai');


    // Manajemen Menu
    Route::middleware('permission:Manajemen Menu')->prefix('/dashboard/manajemen-menu')->group(function () {
        // Menu
        Route::get('/dashboard-menu', 'DashboardMenuController@index')->name('manajemen-menu.menu');

        // SubMenu
        Route::get('/dashboard-sub-menu', 'DashboardSubMenuController@index')->name('manajemen-menu.sub-menu');
    });


    // Manajemen Pengguna
    Route::middleware('permission:Manajemen Pengguna')->prefix('/dashboard/manajemen-pengguna')->group(function () {

        // Akun Pengguna
        Route::prefix('/akun')->group(function () {
            Route::get('', 'UserController@index')->name('manajemen-pengguna.pengguna');
            Route::get('/tambah-pengguna', 'UserController@create')->name('manajemen-pengguna.tambah-pengguna');
        });

        // Role Dan Hak Akses
        Route::prefix('/role-dan-hak-akses')->group(function () {
            Route::get('', 'UserRoleAccessController@index')->name('manajemen-pengguna.role-dan-hak-akses');
        });
    });
});


// Landing Page
Route::get('/', 'HomeController@index')->name('home');
