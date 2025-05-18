<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProdiController;

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

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Berita Routes
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index'); // Changed from 'berita' to 'berita.index'
Route::get('/berita-list', [BeritaController::class, 'list'])->name('berita'); // Optional: Add this if you need to keep old 'berita' route name
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// Admin routes (tambahkan middleware auth jika diperlukan)
Route::prefix('admin')->name('admin.')->group(function () {
    // Berita management routes
    Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
});

// Program Studi Routes
Route::get('/program-studi', [ProdiController::class, 'index'])->name('program-studi');
Route::get('/program-studi/manajemen', [ProdiController::class, 'manajemen'])->name('prodi.manajemen');
Route::get('/program-studi/akuntansi', [ProdiController::class, 'akuntansi'])->name('prodi.akuntansi');
Route::get('/program-studi/manajemen-bisnis', [ProdiController::class, 'bisnis'])->name('prodi.bisnis');

// Informasi Routes
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
Route::get('/about', [InformasiController::class, 'about'])->name('about');
Route::get('/fasilitas', [InformasiController::class, 'fasilitas'])->name('fasilitas');
Route::get('/alumni', [InformasiController::class, 'alumni'])->name('alumni');

// Akademik Routes
Route::get('/akademik/kalender', [InformasiController::class, 'kalender'])->name('akademik.kalender');

// Kontak Routes
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');

// Pendaftaran Routes
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran/daftar', [PendaftaranController::class, 'daftar'])->name('pendaftaran.daftar');