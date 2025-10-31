<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
</head>
<body>
    <h1>Daftar Pelanggan</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telepon</th>
        </tr>
        @foreach($data as $pelanggan)
        <tr>
            <td>{{ $pelanggan->id }}</td>
            <td>{{ $pelanggan->nama }}</td>
            <td>{{ $pelanggan->alamat }}</td>
            <td>{{ $pelanggan->email }}</td>
            <td>{{ $pelanggan->no_telepon }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

