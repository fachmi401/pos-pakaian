<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
</head>
<body>

<h2>Data Pelanggan</h2>

<a href="{{ route('pelanggan.create') }}">
    Tambah Pelanggan
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    @foreach($pelanggans as $pelanggan)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pelanggan->nama_pelanggan }}</td>
        <td>{{ $pelanggan->alamat }}</td>
        <td>{{ $pelanggan->telepon }}</td>
        <td>{{ $pelanggan->email }}</td>
        <td>

            <a href="{{ route('pelanggan.edit',$pelanggan->id) }}">
                Edit
            </a>

            <form action="{{ route('pelanggan.destroy',$pelanggan->id) }}"
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