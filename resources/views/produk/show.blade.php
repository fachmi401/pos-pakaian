<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>

<h2>Detail Produk</h2>

<p>Kategori : {{ $produk->kategori->nama_kategori }}</p>
<p>Nama Produk : {{ $produk->nama_produk }}</p>
<p>Ukuran : {{ $produk->ukuran }}</p>
<p>Warna : {{ $produk->warna }}</p>
<p>Harga : {{ $produk->harga }}</p>
<p>Stok : {{ $produk->stok }}</p>

<a href="{{ route('produk.index') }}">
    Kembali
</a>

</body>
</html>