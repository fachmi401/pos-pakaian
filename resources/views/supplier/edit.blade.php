<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
</head>
<body>

<h2>Edit Supplier</h2>

<form action="{{ route('supplier.update',$supplier->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Supplier</label><br>
    <input type="text"
           name="nama_supplier"
           value="{{ $supplier->nama_supplier }}">

    <br><br>

    <label>Alamat</label><br>
    <textarea name="alamat">{{ $supplier->alamat }}</textarea>

    <br><br>

    <label>Telepon</label><br>
    <input type="text"
           name="telepon"
           value="{{ $supplier->telepon }}">

    <br><br>

    <label>Email</label><br>
    <input type="email"
           name="email"
           value="{{ $supplier->email }}">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>