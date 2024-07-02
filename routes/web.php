<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('admin', \App\Http\Controllers\AdminController::class);
Route::resource('level', \App\Http\Controllers\LevelController::class);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('anggota', \App\Http\Controllers\AnggotaController::class);
Route::resource('buku', \App\Http\Controllers\BukuController::class);
