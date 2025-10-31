<!DOCTYPE html>
<html>
<head>
    <title>Data Detail Pesanan</title>
</head>
<body>
    <h1>Daftar Detail Pesanan</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>ID Pesanan</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>
        @foreach($data as $detail)
        <tr>
            <td>{{ $detail->id }}</td>
            <td>{{ $detail->pesanan_id }}</td>
            <td>{{ $detail->produk->nama }}</td>
            <td>{{ $detail->jumlah }}</td>
            <td>{{ number_format($detail->harga_satuan, 2, ',', '.') }}</td>
            <td>{{ number_format($detail->subtotal, 2, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>