<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AnggotaController, 
    BukuController, 
    RakController,
    PetugasController
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
    return view('welcome');
})->name('dashboard');

Route::resource('/anggota', AnggotaController::class);

Route::resource('/buku', BukuController::class);

Route::resource('/rak', RakController::class);

Route::resource('/petugas', PetugasController::class);