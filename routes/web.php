<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('user.pages.homepage');
})->name('dashboard');
Route::get('/fakultas/{faculty}', [RoomController::class, 'faculty'])->name('fakultas');
Route::get('/barang/{major}/{filter}', [RoomController::class, 'major'])->name('alat-bahan');
Route::get('/barang', function () {
    return view('user.pages.tools');
})->name('barang');
Route::get('/peminjaman', function () {
    return view('user.pages.borrows');
})->name('peminjaman');

Route::prefix('auth')->group(function () {
    Route::get('/{auth}', [LoginController::class, 'index'])->name('authentication');
    Route::post('/sign-in', [LoginController::class, 'login'])->name('sign-in');
    Route::post('/sign-up', [RegisterController::class, 'regist'])->name('sign-up');
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');    
});