<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kasir</title>
</head>
<body>

<h2>Tambah Kasir</h2>

<form action="{{ route('kasir.store') }}" method="POST">

    @csrf

    <p>
        Nama
        <br>
        <input type="text" name="nama">
    </p>

    <p>
        Username
        <br>
        <input type="text" name="username">
    </p>

    <p>
        Password
        <br>
        <input type="password" name="password">
    </p>

    <p>
        Email
        <br>
        <input type="email" name="email">
    </p>

    <p>
        No HP
        <br>
        <input type="text" name="no_hp">
    </p>

    <p>
        Alamat
        <br>
        <textarea name="alamat"></textarea>
    </p>

    <button type="submit">
        Simpan
    </button>

</form>

<br>

<a href="{{ route('kasir.index') }}">
    Kembali
</a>

</body>
</html>