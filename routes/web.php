<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasewa', function () {
    return view('mahasewa');
});
