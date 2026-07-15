<!DOCTYPE html>
<html>
<head>
    <title>Dashboard POS Pakaian</title>
</head>
<body>

<h1>Dashboard POS Pakaian</h1>

<hr>

<h3>Total Produk : {{ $produk }}</h3>

<h3>Total Supplier : {{ $supplier }}</h3>

<h3>Total Pelanggan : {{ $pelanggan }}</h3>

<h3>Total Pembelian : {{ $pembelian }}</h3>

<h3>Total Penjualan : {{ $penjualan }}</h3>

<hr>

<p>Selamat datang, {{ auth()->user()->name }}</p>

<p>Role : {{ auth()->user()->role }}</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html>