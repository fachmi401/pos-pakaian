<!DOCTYPE html>
<html>
<head>
    <title>Detail Pembelian</title>
</head>
<body>

<h2>Detail Pembelian</h2>

<p>ID Pembelian : {{ $detail->pembelian->id }}</p>

<p>Produk : {{ $detail->produk->nama_produk }}</p>

<p>Jumlah : {{ $detail->jumlah }}</p>

<p>Harga Beli : Rp {{ number_format($detail->harga_beli,0,',','.') }}</p>

<p>Subtotal : Rp {{ number_format($detail->subtotal,0,',','.') }}</p>

<br>

<a href="{{ route('detail-pembelian.index') }}">
Kembali
</a>

</body>
</html>