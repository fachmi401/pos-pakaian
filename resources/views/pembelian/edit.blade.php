<!DOCTYPE html>
<html>
<head>
    <title>Edit Pembelian</title>
</head>
<body>

<h2>Edit Pembelian</h2>

<form action="{{ route('pembelian.update',$pembelian->id) }}" method="POST">

@csrf
@method('PUT')

<label>Supplier</label><br>

<select name="supplier_id">

@foreach($suppliers as $supplier)

<option value="{{ $supplier->id }}"
{{ $supplier->id == $pembelian->supplier_id ? 'selected' : '' }}>

{{ $supplier->nama_supplier }}

</option>

@endforeach

</select>

<br><br>

<label>Kasir</label><br>

<select name="kasir_id">

@foreach($kasirs as $kasir)

<option value="{{ $kasir->id }}"
{{ $kasir->id == $pembelian->kasir_id ? 'selected' : '' }}>

{{ $kasir->nama_kasir }}

</option>

@endforeach

</select>

<br><br>

<label>Tanggal</label><br>

<input type="date"
name="tanggal"
value="{{ $pembelian->tanggal }}">

<br><br>

<label>Total</label><br>

<input type="number"
name="total"
value="{{ $pembelian->total }}">

<br><br>

<button type="submit">
Update
</button>

</form>

</body>
</html>