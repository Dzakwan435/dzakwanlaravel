<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome')
    return "
    <h1> halaman home </h1>
    <a href='/about'>About</a><br>
    <a href='/profile'>profile</a><br>
    <a href='/materi-laravel-10-part-2'>materi-laravel-10-part-2</a>
       
    ";
});

Route::get('/about', function () {
    // return view('welcome')
    return "
    <h1> halaman about </h1>
    <a href='/'>home</a><br>
    <a href='/profile'>profile</a><br>
    <a href='/materi-laravel-10-part-2'>materi-laravel-10-part-2</a>
       
    ";
});

Route::get('/profile', function () {
    // return view('welcome')
    return "
    <h1> halaman profile </h1>
    <a href='/'>home</a><br>
    <a href='/about'>About</a><br>
    <a href='/materi-laravel-10-part-2'>materi-laravel-10-part-2</a>
       
    ";
});

Route::get('/materi-laravel-10-part-2', function () {
    // return view('welcome')
    $nama = "dzakwan Abbas";
    $alamat = "marendal JL sumber Amal";
    $umur = 20;
    $jurusan = "sistem informasi";
    return " 
    <h1> halo nama saya $nama</h1>
    <h2> alamat saya $alamat</h2>
    <h3> umur saya $umur</h3>
    <h3> saya kuliah di jurusan $jurusan</h3>
    <a href='/'>home</a><br>
    <a href='/about'>About</a><br>
    <a href='profile'>profile</a><br>
       
    ";
});
