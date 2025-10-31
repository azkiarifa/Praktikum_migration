<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
</head>
<body>
    <h1>Daftar Pesanan</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Tanggal Pesanan</th>
            <th>Nama Pelanggan</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>
        @foreach($data as $pesanan)
        <tr>
            <td>{{ $pesanan->id }}</td>
            <td>{{ $pesanan->tanggal_pesanan }}</td>
            <td>{{ $pesanan->pelanggan->nama }}</td>
            <td>{{ number_format($pesanan->total_harga, 2, ',', '.') }}</td>
            <td>{{ ucfirst($pesanan->status) }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
