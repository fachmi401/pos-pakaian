<?php

namespace App\Http\Controllers;

use App\Models\DetailPembelian;
use App\Models\Pembelian;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailPembelianController extends Controller
{
    public function index()
    {
        $details = DetailPembelian::with(['pembelian', 'produk'])->get();

        return view('detail_pembelian.index', compact('details'));
    }

    public function create()
    {
        $pembelians = Pembelian::all();
        $produks = Produk::all();

        return view('detail_pembelian.create', compact('pembelians', 'produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pembelian_id' => 'required',
            'produk_id' => 'required',
            'jumlah' => 'required|numeric',
            'harga_beli' => 'required|numeric'
        ]);

        $subtotal = $request->jumlah * $request->harga_beli;

        DetailPembelian::create([
            'pembelian_id' => $request->pembelian_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'harga_beli' => $request->harga_beli,
            'subtotal' => $subtotal,
        ]);

        return redirect()->route('detail-pembelian.index')
            ->with('success', 'Detail pembelian berhasil ditambahkan.');
    }
}