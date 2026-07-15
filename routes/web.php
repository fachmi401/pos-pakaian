<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\DetailPembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Admin
    Route::middleware('role:admin')->group(function () {

        Route::resource('kategori', KategoriController::class);
        Route::resource('produk', ProdukController::class);
        Route::resource('supplier', SupplierController::class);
        Route::resource('pelanggan', PelangganController::class);
        Route::resource('kasir', KasirController::class);
        Route::resource('pembelian', PembelianController::class);
        Route::resource('detail-pembelian', DetailPembelianController::class);

    });

    // Kasir
    Route::middleware('role:kasir')->group(function () {

        Route::resource('penjualan', PenjualanController::class);
        Route::resource('detail-penjualan', DetailPenjualanController::class);

    });

});