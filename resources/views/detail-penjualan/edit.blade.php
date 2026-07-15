<!DOCTYPE html>
<html>
<head>
    <title>Edit Detail Penjualan</title>
</head>
<body>

<h2>Edit Detail Penjualan</h2>

<form action="{{ route('detail-penjualan.update',$detailPenjualan->id) }}" method="POST">

@csrf
@method('PUT')

<label>Penjualan</label><br>

<select name="penjualan_id">

@foreach($penjualans as $penjualan)

<option value="{{ $penjualan->id }}"
{{ $detailPenjualan->penjualan_id==$penjualan->id ? 'selected' : '' }}>

{{ $penjualan->id }}

</option>

@endforeach

</select>

<br><br>

<label>Produk</label><br>

<select name="produk_id">

@foreach($produks as $produk)

<option value="{{ $produk->id }}"
{{ $detailPenjualan->produk_id==$produk->id ? 'selected' : '' }}>

{{ $produk->nama_produk }}

</option>

@endforeach

</select>

<br><br>

<label>Qty</label><br>

<input type="number"
name="qty"
value="{{ $detailPenjualan->qty }}">

<br><br>

<label>Harga Jual</label><br>

<input type="number"
name="harga_jual"
value="{{ $detailPenjualan->harga_jual }}">

<br><br>

<label>Subtotal</label><br>

<input type="number"
name="subtotal"
value="{{ $detailPenjualan->subtotal }}">

<br><br>

<button type="submit">
Update
</button>

</form>

<br>

<a href="{{ route('detail-penjualan.index') }}">
Kembali
</a>

</body>
</html>