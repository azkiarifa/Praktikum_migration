<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>
        @foreach($data as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->nama }}</td>
            <td>{{ number_format($produk->harga, 2, ',', '.') }}</td>
            <td>{{ $produk->stok }}</td>
            <td>{{ $produk->deskripsi }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
