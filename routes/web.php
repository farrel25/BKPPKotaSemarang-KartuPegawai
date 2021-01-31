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
    });

    // RoleDanHakAkses
    Route::prefix('/role-dan-hak-akses')->group(function () {
        Route::get('', 'UserRoleAccessController@index')->name('manajemen-pengguna.role-dan-hak-akses');
    });
});

// Pegawai
Route::get('/dashboard/pegawai/pengajuan-pegawai', 'EmployeeController@index')->name('pegawai.pengajuan-pegawai');
