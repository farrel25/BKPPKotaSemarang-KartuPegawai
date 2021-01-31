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


// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.main.index');
})->name('dashboard');


// Landing Page
Route::get('/', 'HomeController@index')->name('home');

// User
Route::prefix('/dashboard/manajemen-pengguna')->group(function () {

    // Pengguna
    Route::prefix('/pengguna')->group(function () {
        Route::get('', 'UserController@index')->name('manajemen-pengguna.pengguna');
        Route::get('/tambah-pengguna', 'UserController@create')->name('manajemen-pengguna.tambah-pengguna');
    });

    // RoleDanHakAkses
    Route::prefix('/role-dan-hak-akses')->group(function () {
        Route::get('', 'UserRoleAccessController@index')->name('manajemen-pengguna.role-dan-hak-akses');
    });
});


// Pengajuan Kartu
Route::get('/dashboard/kartu-pegawai/pengajuan-kartu-pegawai', 'ProposalController@index')->name('kartu-pegawai.pengajuan-kartu-pegawai');
Route::get('/dashboard/kartu-pegawai/tambah-pengajuan-kartu-pegawai', 'ProposalController@create')->name('kartu-pegawai.tambah-pengajuan-kartu-pegawai');
Route::get('/dashboard/kartu-pegawai/edit-pengajuan-kartu-pegawai', 'ProposalController@edit')->name('kartu-pegawai.edit-pengajuan-kartu-pegawai');

// Kartu Selesai
Route::get('/dashboard/kartu-pegawai/kartu-pegawai-selesai', 'HistoryEmployeeCardController@index')->name('kartu-pegawai.kartu-pegawai-selesai');

// Menu
Route::get('/dashboard/dashboard-menu', 'DashboardMenuController@index')->name('manajemen-menu.menu');

// SubMenu
Route::get('/dashboard/dashboard-sub-menu', 'DashboardSubMenuController@index')->name('manajemen-menu.sub-menu');

// Pegawai
Route::get('/dashboard/data-pegawai', 'EmployeeController@index')->name('pegawai.data-pegawai');