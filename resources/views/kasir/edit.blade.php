<!DOCTYPE html>
<html>
<head>
    <title>Edit Kasir</title>
</head>
<body>

<h2>Edit Kasir</h2>

<form action="{{ route('kasir.update',$kasir->id) }}" method="POST">

    @csrf
    @method('PUT')

    <p>
        Nama
        <br>
        <input type="text" name="nama" value="{{ $kasir->nama }}">
    </p>

    <p>
        Username
        <br>
        <input type="text" name="username" value="{{ $kasir->username }}">
    </p>

    <p>
        Password Baru
        <br>
        <input type="password" name="password">
        <br>
        <small>Kosongkan jika tidak ingin mengganti password.</small>
    </p>

    <p>
        Email
        <br>
        <input type="email" name="email" value="{{ $kasir->email }}">
    </p>

    <p>
        No HP
        <br>
        <input type="text" name="no_hp" value="{{ $kasir->no_hp }}">
    </p>

    <p>
        Alamat
        <br>
        <textarea name="alamat">{{ $kasir->alamat }}</textarea>
    </p>

    <button type="submit">
        Update
    </button>

</form>

<br>

<a href="{{ route('kasir.index') }}">
    Kembali
</a>

</body>
</html>