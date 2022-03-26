<?php

namespace App\Http\Controllers;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\UserController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('kategori', KategoriController::class);
Route::resource('users', UserController::class);
Route::get('pendafataran', [ApiController::class, 'pendaftaran']);



