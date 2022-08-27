<?php

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

Route::resource('jenis', App\Http\Controllers\JenisController::class);

Route::resource('periode', App\Http\Controllers\PeriodeController::class);

Route::resource('hitung', App\Http\Controllers\HitungController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
