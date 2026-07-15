<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
</head>
<body>

<h2>Tambah Supplier</h2>

<form action="{{ route('supplier.store') }}" method="POST">
    @csrf

    <label>Nama Supplier</label><br>
    <input type="text" name="nama_supplier">

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

<a href="{{ route('supplier.index') }}">
    Kembali
</a>

</body>
</html>