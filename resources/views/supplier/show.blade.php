<!DOCTYPE html>
<html>
<head>
    <title>Detail Supplier</title>
</head>
<body>

<h2>Detail Supplier</h2>

<p>Nama Supplier : {{ $supplier->nama_supplier }}</p>
<p>Alamat : {{ $supplier->alamat }}</p>
<p>Telepon : {{ $supplier->telepon }}</p>
<p>Email : {{ $supplier->email }}</p>

<a href="{{ route('supplier.index') }}">
    Kembali
</a>

</body>
</html>