<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>

    <h2>Data Kategori</h2>

    <a href="{{ route('kategori.create') }}">
        Tambah Kategori
    </a>

    <br><br>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @foreach($kategoris as $kategori)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>{{ $kategori->deskripsi }}</td>
            <td>

                <a href="{{ route('kategori.edit', $kategori->id) }}">
                    Edit
                </a>

                <form action="{{ route('kategori.destroy', $kategori->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Hapus
                    </button>
                </form>

            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>