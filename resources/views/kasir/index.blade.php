<!DOCTYPE html>
<html>
<head>
    <title>Data Kasir</title>
</head>
<body>

<h2>Data Kasir</h2>

<a href="{{ route('kasir.create') }}">
    Tambah Kasir
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>

    @foreach($kasir as $item)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->username }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->no_hp }}</td>

        <td>

            <a href="{{ route('kasir.show',$item->id) }}">
                Detail
            </a>

            |

            <a href="{{ route('kasir.edit',$item->id) }}">
                Edit
            </a>

            |

            <form action="{{ route('kasir.destroy',$item->id) }}"
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