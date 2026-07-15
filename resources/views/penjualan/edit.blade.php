<!DOCTYPE html>
<html>
<head>
    <title>Edit Penjualan</title>
</head>
<body>

<h2>Edit Penjualan</h2>

<form action="{{ route('penjualan.update',$penjualan->id) }}"
method="POST">

@csrf
@method('PUT')

<label>Pelanggan</label><br>

<select name="pelanggan_id">

@foreach($pelanggans as $pelanggan)

<option value="{{ $pelanggan->id }}"
{{ $penjualan->pelanggan_id==$pelanggan->id ? 'selected':'' }}>

{{ $pelanggan->nama_pelanggan }}

</option>

@endforeach

</select>

<br><br>

<label>Kasir</label><br>

<select name="kasir_id">

@foreach($kasirs as $kasir)

<option value="{{ $kasir->id }}"
{{ $penjualan->kasir_id==$kasir->id ? 'selected':'' }}>

{{ $kasir->nama_kasir }}

</option>

@endforeach

</select>

<br><br>

<label>Tanggal</label><br>

<input
type="date"
name="tanggal"
value="{{ $penjualan->tanggal }}">

<br><br>

<label>Total</label><br>

<input
type="number"
name="total"
value="{{ $penjualan->total }}">

<br><br>

<button type="submit">
Update
</button>

</form>

<br>

<a href="{{ route('penjualan.index') }}">
Kembali
</a>

</body>
</html>