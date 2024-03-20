<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halaman', function () {
    return view('halproduk');
});

Route::get('bio', function () {
    return view('biodata');
});

Route::get('buku', function () {
    return view('bukutamu');
});

Route::get('test', function () {
    return view('testing');
});

Route::get('/about', function () {
    return view('about');
});
