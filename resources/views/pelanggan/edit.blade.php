<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
</head>
<body>

<h2>Edit Pelanggan</h2>

<form action="{{ route('pelanggan.update',$pelanggan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Pelanggan</label><br>
    <input type="text"
           name="nama_pelanggan"
           value="{{ $pelanggan->nama_pelanggan }}">

    <br><br>

    <label>Alamat</label><br>
    <textarea name="alamat">{{ $pelanggan->alamat }}</textarea>

    <br><br>

    <label>Telepon</label><br>
    <input type="text"
           name="telepon"
           value="{{ $pelanggan->telepon }}">

    <br><br>

    <label>Email</label><br>
    <input type="email"
           name="email"
           value="{{ $pelanggan->email }}">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>