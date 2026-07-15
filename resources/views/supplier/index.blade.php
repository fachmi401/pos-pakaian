<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
</head>
<body>

<h2>Data Supplier</h2>

<a href="{{ route('supplier.create') }}">
    Tambah Supplier
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Supplier</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    @foreach($suppliers as $supplier)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $supplier->nama_supplier }}</td>
        <td>{{ $supplier->alamat }}</td>
        <td>{{ $supplier->telepon }}</td>
        <td>{{ $supplier->email }}</td>
        <td>

            <a href="{{ route('supplier.edit',$supplier->id) }}">
                Edit
            </a>

            <form action="{{ route('supplier.destroy',$supplier->id) }}"
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