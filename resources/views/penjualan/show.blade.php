<!DOCTYPE html>
<html>
<head>
    <title>Detail Penjualan</title>
</head>
<body>

<h2>Detail Penjualan</h2>

<p>
<b>Pelanggan :</b>
{{ $penjualan->pelanggan->nama_pelanggan }}
</p>

<p>
<b>Kasir :</b>
{{ $penjualan->kasir->nama_kasir }}
</p>

<p>
<b>Tanggal :</b>
{{ $penjualan->tanggal }}
</p>

<p>
<b>Total :</b>
Rp {{ number_format($penjualan->total,0,',','.') }}
</p>

<a href="{{ route('penjualan.index') }}">
Kembali
</a>

</body>
</html>