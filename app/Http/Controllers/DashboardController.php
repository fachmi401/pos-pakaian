<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Supplier;
use App\Models\Pelanggan;
use App\Models\Pembelian;
use App\Models\Penjualan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'produk' => Produk::count(),
            'supplier' => Supplier::count(),
            'pelanggan' => Pelanggan::count(),
            'pembelian' => Pembelian::count(),
            'penjualan' => Penjualan::count(),
        ]);
    }
}