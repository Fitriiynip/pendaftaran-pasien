<?php

use Illuminate\Support\Facadee;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\KepalaKeluargaController;
use App\Http\Controllers\pasienController;
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

// hanya untuk role pengguna
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
function(){
    route::get('/', function(){
        return view('kepalakeluarga.index');
    });

});

Route::resource('kepalakeluarga', KepalaKeluargaController::class);
Route::resource('pasien', pasienController::class);



