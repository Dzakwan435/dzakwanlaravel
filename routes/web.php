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

Route::get('/uts', function () {
    return view('mahasiswa.uts');
});

Route::get('/produk', function () {
    $products = [
        ['kode' => 'BRG001', 'nama' => 'PILPEN', 'jenis' => 'ALAT TULIS', 'harga' => 20000],
        ['kode' => 'BRD002', 'nama' => 'BUKU', 'jenis' => 'ALAT TULIS', 'harga' => 15000],
    ];
    
    return view('mahasiswa.produk', ['products' => $products]);
});

Route::get('/tambah', function () {

    $products_types = [
        [
            "jenis" => "Alat Tulis"
        ],
        [
            "jenis" => "Elektronik"
        ],
        [
            "jenis" => "Sembako"
        ],
    ];
    $page_title = "Form Tambah Produk";
    return view('mahasiswa.tambah', [
        'page_title' => $page_title,
        'products_types' => $products_types
        
    ]);
});

    
