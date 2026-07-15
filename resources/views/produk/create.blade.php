<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h2>Tambah Produk</h2>

<form action="{{ route('produk.store') }}" method="POST">
    @csrf

    <label>Kategori</label><br>
    <select name="kategori_id">
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}">
                {{ $kategori->nama_kategori }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Nama Produk</label><br>
    <input type="text" name="nama_produk">

    <br><br>

    <label>Ukuran</label><br>
    <input type="text" name="ukuran">

    <br><br>

    <label>Warna</label><br>
    <input type="text" name="warna">

    <br><br>

    <label>Harga</label><br>
    <input type="number" name="harga">

    <br><br>

    <label>Stok</label><br>
    <input type="number" name="stok">

    <br><br>

    <button type="submit">Simpan</button>
</form>

<br>

<a href="{{ route('produk.index') }}">Kembali</a>

</body>
</html>