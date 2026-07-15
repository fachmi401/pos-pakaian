<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    public function index()
    {
        $detailPenjualans = DetailPenjualan::with('penjualan','produk')->get();

        return view('detail-penjualan.index', compact('detailPenjualans'));
    }

    public function create()
    {
        $penjualans = Penjualan::all();
        $produks = Produk::all();

        return view('detail-penjualan.create', compact('penjualans','produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penjualan_id'=>'required',
            'produk_id'=>'required',
            'qty'=>'required|numeric',
            'harga_jual'=>'required|numeric',
            'subtotal'=>'required|numeric'
        ]);

        DetailPenjualan::create($request->all());

        return redirect()->route('detail-penjualan.index')
                ->with('success','Data berhasil ditambahkan');
    }

    public function show(DetailPenjualan $detailPenjualan)
    {
        return view('detail-penjualan.show', compact('detailPenjualan'));
    }

    public function edit(DetailPenjualan $detailPenjualan)
    {
        $penjualans = Penjualan::all();
        $produks = Produk::all();

        return view('detail-penjualan.edit', compact(
            'detailPenjualan',
            'penjualans',
            'produks'
        ));
    }

    public function update(Request $request, DetailPenjualan $detailPenjualan)
    {
        $request->validate([
            'penjualan_id'=>'required',
            'produk_id'=>'required',
            'qty'=>'required|numeric',
            'harga_jual'=>'required|numeric',
            'subtotal'=>'required|numeric'
        ]);

        $detailPenjualan->update($request->all());

        return redirect()->route('detail-penjualan.index')
                ->with('success','Data berhasil diupdate');
    }

    public function destroy(DetailPenjualan $detailPenjualan)
    {
        $detailPenjualan->delete();

        return redirect()->route('detail-penjualan.index')
                ->with('success','Data berhasil dihapus');
    }
}