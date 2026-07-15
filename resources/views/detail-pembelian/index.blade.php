<!DOCTYPE html>
<html>
<head>
    <title>Data Detail Pembelian</title>
</head>
<body>

<h2>Data Detail Pembelian</h2>

<a href="{{ route('detail-pembelian.create') }}">
    Tambah Detail Pembelian
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>ID Pembelian</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Harga Beli</th>
        <th>Subtotal</th>
        <th>Aksi</th>
    </tr>

    @foreach($details as $detail)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $detail->pembelian->id }}</td>
        <td>{{ $detail->produk->nama_produk }}</td>
        <td>{{ $detail->jumlah }}</td>
        <td>Rp {{ number_format($detail->harga_beli,0,',','.') }}</td>
        <td>Rp {{ number_format($detail->subtotal,0,',','.') }}</td>
        <td>
            <a href="{{ route('detail-pembelian.show',$detail->id) }}">Detail</a> |
            <a href="{{ route('detail-pembelian.edit',$detail->id) }}">Edit</a> |

            <form action="{{ route('detail-pembelian.destroy',$detail->id) }}"
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