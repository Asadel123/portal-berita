<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;

Route::get('/', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');
Route::get('/kategori/{id}', [KategoriController::class, 'show']);
Route::view('/tentang', 'tentang');
Route::view('/kontak', 'kontak');

