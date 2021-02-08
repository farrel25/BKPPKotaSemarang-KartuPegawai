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

    // Landing Page - Upload data pengajuan KarPeg
    Route::post('/pengajuan-baru', 'ProposalController@storeNew')->name('home.store-new');
    Route::post('/pengajuan-ganti', 'ProposalController@storeChange')->name('home.store-change');

    // Dashboard
    Route::middleware('permission:Menu Utama')->get('/dashboard', 'DashboardController@index')->name('dashboard');

    // Notification Page
    Route::prefix('/notification')->group(function () {
        Route::get('', 'NotificationController@index')->name('notification');
        // update file upload
        Route::patch('/{proposal}/revisi', 'ProposalController@revise')->name('kartu-pegawai.revise');
    });

    // Kartu Pegawai
    Route::middleware('permission:Kartu Pegawai')->prefix('/dashboard/kartu-pegawai')->group(function () {

        // Pengajuan Kartu Pegawai
        Route::get('/pengajuan', 'ProposalController@index')->name('kartu-pegawai.pengajuan-kartu-pegawai');
        // update acc
        Route::get('/{proposal}/edit', 'ProposalController@edit')->name('kartu-pegawai.edit-pengajuan-kartu-pegawai');
        Route::patch('/{proposal}/edit', 'ProposalController@update')->name('kartu-pegawai.update');
        // download sk cpns
        Route::get('/{proposal}/download-sk-cpns', 'ProposalController@downloadSkCpns')->name('kartu-pegawai.download.sk-cpns');
        // download sk pns
        Route::get('/{proposal}/download-sk-pns', 'ProposalController@downloadSkPns')->name('kartu-pegawai.download.sk-pns');
        // download sttpl
        Route::get('/{proposal}/download-sttpl', 'ProposalController@downloadSttpl')->name('kartu-pegawai.download.sttpl');
        // download sk hilang
        Route::get('/{proposal}/download-sk-hilang', 'ProposalController@downloadSkHilang')->name('kartu-pegawai.download.sk-hilang');
        // download photo
        Route::get('/{proposal}/download-photo', 'ProposalController@downloadPhoto')->name('kartu-pegawai.download.photo');

        // Route::get('/tambah-pengajuan-kartu-pegawai', 'ProposalController@create')->name('kartu-pegawai.tambah-pengajuan-kartu-pegawai');

        // Kartu Pegawai Selesai
        Route::get('/selesai', 'HistoryEmployeeCardController@index')->name('kartu-pegawai.kartu-pegawai-selesai');
    });


    // Pegawai
    Route::middleware('permission:Pegawai')->get('/dashboard/pegawai/data', 'EmployeeController@index')->name('pegawai.data-pegawai');


    // Manajemen Menu
    Route::middleware('permission:Manajemen Menu')->prefix('/dashboard/manajemen-menu')->group(function () {
        // Menu
        Route::prefix('/dashboard-menu')->group(function () {
            Route::get('', 'DashboardMenuController@index')->name('manajemen-menu.menu');
            // store
            Route::post('/tambah', 'DashboardMenuController@store')->name('manajemen-menu.store');
            // update
            Route::patch('/edit', 'DashboardMenuController@update')->name('manajemen-menu.update');
            // delete
            Route::delete('/{dashboard_menu}/hapus', 'DashboardMenuController@destroy')->name('manajemen-menu.destroy');
        });

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
