<?php

use Illuminate\Support\Facades\Route;

// Halaman pertama yang dibuka (Landing Page)
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Halaman Dashboard Monitoring
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pemilahan', function () {
    return view('pemilahan');
});

Route::get('/pekerja', function () {
    return view('pekerja');
});

Route::get('/monitoring', function () {
    return view('monitoring');
});

Route::get('/laporan', function () {
    return view('laporan');
});