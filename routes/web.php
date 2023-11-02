<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AnggotaController, 
    BukuController, 
    RakController,
    PetugasController,
    PeminjamanController,
    AuthController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/anggota', AnggotaController::class)->middleware('auth');

Route::resource('/buku', BukuController::class)->middleware('auth');

Route::resource('/rak', RakController::class)->middleware('auth');

Route::resource('/petugas', PetugasController::class)->middleware('auth');

Route::resource('/peminjaman', PeminjamanController::class)->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    //register form
    Route::get('/register', 'register')->name('auth.register');

    //store register
    Route::post('/register', 'store')->name('auth.store');

    //login form
    Route::get('/login', 'login')->name('auth.login');

    //auth process
    Route::post('/auth', 'auth')->name('auth.authentication');

    //logout
    Route::post('/logout', 'logout')->name('auth.logout');

    //dashboard
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
});