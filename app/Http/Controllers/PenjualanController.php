<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\Kasir;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualans = Penjualan::with('pelanggan', 'kasir')->get();

        return view('penjualan.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggans = Pelanggan::all();
        $kasirs = Kasir::all();

        return view('penjualan.create', compact('pelanggans', 'kasirs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'kasir_id'     => 'required',
            'tanggal'      => 'required',
            'total'        => 'required|numeric',
        ]);

        Penjualan::create([
            'pelanggan_id' => $request->pelanggan_id,
            'kasir_id'     => $request->kasir_id,
            'tanggal'      => $request->tanggal,
            'total'        => $request->total,
        ]);

        return redirect()->route('penjualan.index')
                         ->with('success', 'Data penjualan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        $pelanggans = Pelanggan::all();
        $kasirs = Kasir::all();

        return view('penjualan.edit', compact(
            'penjualan',
            'pelanggans',
            'kasirs'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'kasir_id'     => 'required',
            'tanggal'      => 'required',
            'total'        => 'required|numeric',
        ]);

        $penjualan->update([
            'pelanggan_id' => $request->pelanggan_id,
            'kasir_id'     => $request->kasir_id,
            'tanggal'      => $request->tanggal,
            'total'        => $request->total,
        ]);

        return redirect()->route('penjualan.index')
                         ->with('success', 'Data penjualan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();

        return redirect()->route('penjualan.index')
                         ->with('success', 'Data penjualan berhasil dihapus');
    }
}