<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = Kasir::latest()->get();
        return view('kasir.index', compact('kasir'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'username' => 'required|unique:kasir',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:kasir',
            'no_hp' => 'required|max:15',
            'alamat' => 'required',
        ]);

        Kasir::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('kasir.index')
            ->with('success', 'Data kasir berhasil ditambahkan');
    }

    public function show(Kasir $kasir)
    {
        return view('kasir.show', compact('kasir'));
    }

    public function edit(Kasir $kasir)
    {
        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, Kasir $kasir)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'username' => 'required|unique:kasir,username,' . $kasir->id,
            'email' => 'required|email|unique:kasir,email,' . $kasir->id,
            'no_hp' => 'required|max:15',
            'alamat' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ];

        if ($request->password != '') {
            $data['password'] = Hash::make($request->password);
        }

        $kasir->update($data);

        return redirect()->route('kasir.index')
            ->with('success', 'Data kasir berhasil diubah');
    }

    public function destroy(Kasir $kasir)
    {
        $kasir->delete();

        return redirect()->route('kasir.index')
            ->with('success', 'Data kasir berhasil dihapus');
    }
}