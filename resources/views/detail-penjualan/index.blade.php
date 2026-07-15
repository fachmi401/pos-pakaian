<!DOCTYPE html>
<html>
<head>
    <title>Data Detail Penjualan</title>
</head>
<body>

<h2>Data Detail Penjualan</h2>

<a href="{{ route('detail-penjualan.create') }}">
    Tambah Detail Penjualan
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>ID Penjualan</th>
    <th>Produk</th>
    <th>Qty</th>
    <th>Harga Jual</th>
    <th>Subtotal</th>
    <th>Aksi</th>
</tr>

@foreach($detailPenjualans as $detail)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $detail->penjualan->id }}</td>

<td>{{ $detail->produk->nama_produk }}</td>

<td>{{ $detail->qty }}</td>

<td>{{ $detail->harga_jual }}</td>

<td>{{ $detail->subtotal }}</td>

<td>

<a href="{{ route('detail-penjualan.show',$detail->id) }}">
Detail
</a>

|

<a href="{{ route('detail-penjualan.edit',$detail->id) }}">
Edit
</a>

|

<form action="{{ route('detail-penjualan.destroy',$detail->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button type="submit">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</table>

</body>
</html>