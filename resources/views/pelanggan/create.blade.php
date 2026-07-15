<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>

<h2>Tambah Pelanggan</h2>

<form action="{{ route('pelanggan.store') }}" method="POST">
    @csrf

    <label>Nama Pelanggan</label><br>
    <input type="text" name="nama_pelanggan">

    <br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"></textarea>

    <br><br>

    <label>Telepon</label><br>
    <input type="text" name="telepon">

    <br><br>

    <label>Email</label><br>
    <input type="email" name="email">

    <br><br>

    <button type="submit">Simpan</button>

</form>

<br>

<a href="{{ route('pelanggan.index') }}">
    Kembali
</a>

</body>
</html>