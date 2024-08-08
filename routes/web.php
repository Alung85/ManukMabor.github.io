<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('nama');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\PesanController::class, 'index'])->name('index');
Route::get('/pesan', [App\Http\Controllers\PesanController::class, 'pesan'])->name('pesan');
Route::get('/detail', [App\Http\Controllers\PesanController::class, 'detail'])->name('detail');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
