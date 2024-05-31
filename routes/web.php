<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.homepage');
})->name('dashboard');
Route::get('/fakultas', function () {
    return view('user.pages.major');
})->name('fakultas');
Route::get('/barang', function () {
    return view('user.pages.tools');
})->name('barang');
Route::get('/peminjaman', function () {
    return view('user.pages.borrows');
})->name('peminjaman');

Route::prefix('auth')->group(function () {
    Route::get('/', function () {
        return view('user.pages.auth');
    });
});