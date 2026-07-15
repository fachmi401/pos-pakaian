<!DOCTYPE html>
<html>
<head>
    <title>Data Pembelian</title>
</head>
<body>

<h2>Data Pembelian</h2>

<a href="{{ route('pembelian.create') }}">
    Tambah Pembelian
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Supplier</th>
        <th>Kasir</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>

    @foreach($pembelians as $pembelian)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pembelian->tanggal }}</td>
        <td>{{ $pembelian->supplier->nama_supplier }}</td>
        <td>{{ $pembelian->kasir->nama_kasir }}</td>
        <td>Rp {{ number_format($pembelian->total,0,',','.') }}</td>
        <td>

            <a href="{{ route('pembelian.show',$pembelian->id) }}">Detail</a> |

            <a href="{{ route('pembelian.edit',$pembelian->id) }}">Edit</a> |

            <form action="{{ route('pembelian.destroy',$pembelian->id) }}"
                  method="POST"
                  style="display:inline">
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