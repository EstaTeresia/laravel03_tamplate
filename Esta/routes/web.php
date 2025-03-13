<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produk', function () {
    return view('produk.index');
})->name('produk_index');
Route::get('/stok', function () {
    return view('stok.bahan');
})->name('stok_index');
Route::get('/pelanggan', function () {
    return view('pelanggan.nama');
})->name('pelanggan_index');
Route::get('/keuangan', function () {
    return view('keuangan.masukkeluar');
})->name('keuangan_index');
Route::get('/login', function () {
    return view('login.adminmaster');
})->name('login_index');