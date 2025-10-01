<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    $nama = "Dzakwan abbas";
    $umur = 20;
    $alamat = "medan";
    return view('profile', compact('nama', 'umur', 'alamat',));
});
