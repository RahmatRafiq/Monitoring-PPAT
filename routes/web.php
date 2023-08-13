<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');
Route::get('/dashboard/daftar-permohonan', [App\Http\Controllers\DaftarPermohonanController::class, 'index'])->name('Daftar Permohonan');
Route::get('/dashboard/daftar-pemohon', [App\Http\Controllers\DaftarPemohonController::class, 'index'])->name('Daftar Pemohon');
Route::get('/dashboard/status-surat-pemohon', [App\Http\Controllers\StatusSuratPemohon::class, 'index'])->name('Status Surat Pemohon');
// Route::get('/dashboard/detail-saham', [App\Http\Controllers\DetailSahamController::class, 'index'])->name('Detail Saham');
// Route::get('/dashboard/cari-saham', [App\Http\Controllers\CariSahamController::class, 'index'])->name('Cari Saham');
