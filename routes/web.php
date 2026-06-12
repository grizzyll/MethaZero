<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard');

Route::view('/pemilahan', 'pemilahan');
Route::view('/pekerja', 'pekerja');
Route::view('/monitoring', 'monitoring');
Route::view('/laporan', 'laporan');