<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h2>Edit Produk</h2>

<form action="{{ route('produk.update',$produk->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Kategori</label><br>
    <select name="kategori_id">
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}"
            {{ $produk->kategori_id == $kategori->id ? 'selected' : '' }}>
                {{ $kategori->nama_kategori }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Nama Produk</label><br>
    <input type="text"
           name="nama_produk"
           value="{{ $produk->nama_produk }}">

    <br><br>

    <label>Ukuran</label><br>
    <input type="text"
           name="ukuran"
           value="{{ $produk->ukuran }}">

    <br><br>

    <label>Warna</label><br>
    <input type="text"
           name="warna"
           value="{{ $produk->warna }}">

    <br><br>

    <label>Harga</label><br>
    <input type="number"
           name="harga"
           value="{{ $produk->harga }}">

    <br><br>

    <label>Stok</label><br>
    <input type="number"
           name="stok"
           value="{{ $produk->stok }}">

    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>