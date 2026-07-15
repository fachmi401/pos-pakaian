<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
</head>
<body>

<h2>Data Penjualan</h2>

<a href="{{ route('penjualan.create') }}">
    Tambah Penjualan
</a>

<br><br>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Pelanggan</th>
    <th>Kasir</th>
    <th>Tanggal</th>
    <th>Total</th>
    <th>Aksi</th>
</tr>

@foreach($penjualans as $penjualan)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $penjualan->pelanggan->nama_pelanggan }}</td>

<td>{{ $penjualan->kasir->nama_kasir }}</td>

<td>{{ $penjualan->tanggal }}</td>

<td>{{ $penjualan->total }}</td>

<td>

<a href="{{ route('penjualan.show',$penjualan->id) }}">
Detail
</a>

|

<a href="{{ route('penjualan.edit',$penjualan->id) }}">
Edit
</a>

|

<form action="{{ route('penjualan.destroy',$penjualan->id) }}"
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