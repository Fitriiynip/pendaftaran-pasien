<?php

use App\Http\Controllers\DataDokterController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\SpesialisController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });
    Route::resource('jadwal', JadwalDokterController::class);
    Route::resource('ruang', RuangController::class);
    Route::resource('keluhan', KeluhanController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('spesialis', SpesialisController::class);
    Route::resource('dokter', DataDokterController::class);

});

//hanya untuk role member
Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member|admin']], function () {
    Route::get('/', function () {
        return 'halaman member';
    });

    route::get('profile', function () {
        return 'halaman profile member';
    });
});
