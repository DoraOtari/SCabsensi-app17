<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Http;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(JabatanController::class)->group(function(){
    Route::get('/jabatan','tampil');
    Route::get('/jabatan/buat', 'buat');
    Route::post('/jabatan','simpan');
    Route::delete('jabatan/{id}','hapus');
    Route::get('jabatan/{id}/ubah', 'ubah');
    Route::put('jabatan/{id}', 'update');
});

Route::resource('/karyawan', KaryawanController::class);
Route::get('/profil',[KaryawanController::class, 'profil']);
Route::post('/upload', [KaryawanController::class, 'upload']);