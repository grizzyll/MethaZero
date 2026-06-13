<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
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