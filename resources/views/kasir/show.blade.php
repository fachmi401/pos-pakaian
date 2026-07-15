<!DOCTYPE html>
<html>
<head>
    <title>Detail Kasir</title>
</head>
<body>

<h2>Detail Kasir</h2>

<table border="1" cellpadding="10">

    <tr>
        <td>Nama</td>
        <td>{{ $kasir->nama }}</td>
    </tr>

    <tr>
        <td>Username</td>
        <td>{{ $kasir->username }}</td>
    </tr>

    <tr>
        <td>Email</td>
        <td>{{ $kasir->email }}</td>
    </tr>

    <tr>
        <td>No HP</td>
        <td>{{ $kasir->no_hp }}</td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>{{ $kasir->alamat }}</td>
    </tr>

</table>

<br>

<a href="{{ route('kasir.index') }}">
    Kembali
</a>

</body>
</html>