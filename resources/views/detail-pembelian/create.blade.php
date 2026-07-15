<!DOCTYPE html>
<html>
<head>
    <title>Tambah Detail Pembelian</title>
</head>
<body>

<h2>Tambah Detail Pembelian</h2>

<form action="{{ route('detail-pembelian.store') }}" method="POST">

@csrf

<label>Pembelian</label><br>

<select name="pembelian_id">

@foreach($pembelians as $pembelian)

<option value="{{ $pembelian->id }}">
Pembelian #{{ $pembelian->id }}
</option>

@endforeach

</select>

<br><br>

<label>Produk</label><br>

<select name="produk_id">

@foreach($produks as $produk)

<option value="{{ $produk->id }}">
{{ $produk->nama_produk }}
</option>

@endforeach

</select>

<br><br>

<label>Jumlah</label><br>

<input type="number"
name="jumlah">

<br><br>

<label>Harga Beli</label><br>

<input type="number"
name="harga_beli">

<br><br>

<button type="submit">
Simpan
</button>

</form>

<br>

<a href="{{ route('detail-pembelian.index') }}">
Kembali
</a>

</body>
</html>