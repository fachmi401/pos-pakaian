<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>

<h2>Data Produk</h2>

<a href="{{ route('produk.create') }}">Tambah Produk</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Nama Produk</th>
        <th>Ukuran</th>
        <th>Warna</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($produks as $produk)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $produk->kategori->nama_kategori }}</td>
        <td>{{ $produk->nama_produk }}</td>
        <td>{{ $produk->ukuran }}</td>
        <td>{{ $produk->warna }}</td>
        <td>{{ $produk->harga }}</td>
        <td>{{ $produk->stok }}</td>
        <td>
            <a href="{{ route('produk.edit',$produk->id) }}">Edit</a>

            <form action="{{ route('produk.destroy',$produk->id) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>