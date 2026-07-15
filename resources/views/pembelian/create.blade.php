<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembelian</title>
</head>
<body>

<h2>Tambah Pembelian</h2>

<form action="{{ route('pembelian.store') }}" method="POST">

@csrf

<label>Supplier</label><br>

<select name="supplier_id">
@foreach($suppliers as $supplier)
<option value="{{ $supplier->id }}">
{{ $supplier->nama_supplier }}
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

<input type="date"
name="tanggal">

<br><br>

<label>Total</label><br>

<input type="number"
name="total">

<br><br>

<button type="submit">
Simpan
</button>

</form>

<br>

<a href="{{ route('pembelian.index') }}">
Kembali
</a>

</body>
</html>