<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penjualan</title>
</head>
<body>

<h2>Tambah Penjualan</h2>

<form action="{{ route('penjualan.store') }}" method="POST">

@csrf

<label>Pelanggan</label><br>

<select name="pelanggan_id">
@foreach($pelanggans as $pelanggan)
<option value="{{ $pelanggan->id }}">
{{ $pelanggan->nama_pelanggan }}
</option>
@endforeach
</select>

<br><br>

<label>Kasir</label><br>

<select name="kasir_id">
@foreach($kasirs as $kasir)
<option value="{{ $kasir->id }}">
{{ $kasir->nama_kasir }}
</option>
@endforeach
</select>

<br><br>

<label>Tanggal</label><br>

<input type="date" name="tanggal">

<br><br>

<label>Total</label><br>

<input type="number" name="total">

<br><br>

<button type="submit">
Simpan
</button>

</form>

<br>

<a href="{{ route('penjualan.index') }}">
Kembali
</a>

</body>
</html>