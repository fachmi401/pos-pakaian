<!DOCTYPE html>
<html>
<head>
    <title>Detail Pelanggan</title>
</head>
<body>

<h2>Detail Pelanggan</h2>

<p>Nama Pelanggan : {{ $pelanggan->nama_pelanggan }}</p>
<p>Alamat : {{ $pelanggan->alamat }}</p>
<p>Telepon : {{ $pelanggan->telepon }}</p>
<p>Email : {{ $pelanggan->email }}</p>

<a href="{{ route('pelanggan.index') }}">
    Kembali
</a>

</body>
</html>