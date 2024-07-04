<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::resource('admin', \App\Http\Controllers\AdminController::class);
Route::resource('level', \App\Http\Controllers\LevelController::class);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('anggota', \App\Http\Controllers\AnggotaController::class);
Route::resource('buku', \App\Http\Controllers\BukuController::class);

Route::get('peminjaman', [TransaksiController::class, 'Peminjaman'])->name('peminjaman');
Route::get('tambah-peminjaman', [TransaksiController::class, 'TambahPeminjaman'])->name('tambah-peminjaman');
Route::post('tambah-peminjaman', [TransaksiController::class, 'AksiTambahPeminjaman'])->name('aksitambah-peminjaman');
Route::get('show-peminjaman/{id}', [TransaksiController::class, 'ShowPeminjaman'])->name('show-peminjaman');
Route::get('delete-peminjaman/{id}', [TransaksiController::class, 'DeletePeminjaman'])->name('delete-peminjaman');
