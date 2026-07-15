<!DOCTYPE html>
<html>
<head>
    <title>Detail Penjualan</title>
</head>
<body>

<h2>Detail Penjualan</h2>

<p>
<b>ID Penjualan :</b>
{{ $detailPenjualan->penjualan->id }}
</p>

<p>
<b>Produk :</b>
{{ $detailPenjualan->produk->nama_produk }}
</p>

<p>
<b>Qty :</b>
{{ $detailPenjualan->qty }}
</p>

<p>
<b>Harga Jual :</b>
{{ $detailPenjualan->harga_jual }}
</p>

<p>
<b>Subtotal :</b>
{{ $detailPenjualan->subtotal }}
</p>

<a href="{{ route('detail-penjualan.index') }}">
Kembali
</a>

</body>
</html>