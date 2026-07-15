<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Supplier;
use App\Models\Kasir;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelians = Pembelian::with(['supplier', 'kasir'])
            ->latest()
            ->get();

        return view('pembelian.index', compact('pembelians'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        $kasirs = Kasir::all();

        return view('pembelian.create', compact('suppliers', 'kasirs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required',
            'kasir_id' => 'required',
            'tanggal' => 'required',
            'total' => 'required'
        ]);

        Pembelian::create($request->all());

        return redirect()->route('pembelian.index')
            ->with('success', 'Data pembelian berhasil ditambahkan');
    }

    public function show(Pembelian $pembelian)
    {
        return view('pembelian.show', compact('pembelian'));
    }

    public function edit(Pembelian $pembelian)
    {
        $suppliers = Supplier::all();
        $kasirs = Kasir::all();

        return view('pembelian.edit', compact(
            'pembelian',
            'suppliers',
            'kasirs'
        ));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
        $pembelian->update($request->all());

        return redirect()->route('pembelian.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();

        return redirect()->route('pembelian.index')
            ->with('success', 'Data berhasil dihapus');
    }
}