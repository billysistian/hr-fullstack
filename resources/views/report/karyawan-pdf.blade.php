<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Karyawan</title>

    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Laporan Data Karyawan</h2>

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Gaji</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($karyawan as $item)

        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->tgl_lahir }}</td>
            <td>{{ number_format($item->gaji, 0, ',', '.') }}</td>
        </tr>

        @endforeach

    </tbody>

</table>

</body>
</html>
