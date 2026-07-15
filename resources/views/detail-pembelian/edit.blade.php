<!DOCTYPE html>
<html>
<head>
    <title>Edit Detail Pembelian</title>
</head>
<body>

<h2>Edit Detail Pembelian</h2>

<form action="{{ route('detail-pembelian.update',$detail->id) }}" method="POST">

@csrf
@method('PUT')

<label>Pembelian</label><br>

<select name="pembelian_id">

@foreach($pembelians as $pembelian)

<option value="{{ $pembelian->id }}"
{{ $pembelian->id == $detail->pembelian_id ? 'selected' : '' }}>

Pembelian #{{ $pembelian->id }}

</option>

@endforeach

</select>

<br><br>

<label>Produk</label><br>

<select name="produk_id">

@foreach($produks as $produk)

<option value="{{ $produk->id }}"
{{ $produk->id == $detail->produk_id ? 'selected' : '' }}>

{{ $produk->nama_produk }}

</option>

@endforeach

</select>

<br><br>

<label>Jumlah</label><br>

<input type="number"
name="jumlah"
value="{{ $detail->jumlah }}">

<br><br>

<label>Harga Beli</label><br>

<input type="number"
name="harga_beli"
value="{{ $detail->harga_beli }}">

<br><br>

<button type="submit">
Update
</button>

</form>

</body>
</html>