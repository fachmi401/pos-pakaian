<!DOCTYPE html>
<html>
<head>
    <title>Tambah Detail Penjualan</title>
</head>
<body>

<h2>Tambah Detail Penjualan</h2>

<form action="{{ route('detail-penjualan.store') }}" method="POST">

@csrf

<label>Penjualan</label><br>

<select name="penjualan_id">

@foreach($penjualans as $penjualan)

<option value="{{ $penjualan->id }}">
{{ $penjualan->id }}
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

<label>Qty</label><br>

<input type="number" name="qty">

<br><br>

<label>Harga Jual</label><br>

<input type="number" name="harga_jual">

<br><br>

<label>Subtotal</label><br>

<input type="number" name="subtotal">

<br><br>

<button type="submit">
Simpan
</button>

</form>

<br>

<a href="{{ route('detail-penjualan.index') }}">
Kembali
</a>

</body>
</html>