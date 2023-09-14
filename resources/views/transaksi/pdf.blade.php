<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
</style>

<h1>Laporan Transaksi</h1>
<br />
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Total Transaksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($laporan as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><?php
                $dateTime = new DateTime($row->tanggal);
                $newDate = $dateTime->format('d/m/Y');
                ?>
                    {{ $newDate }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>Rp {{ number_format($row->harga, 0, ',', '.') }}</td>
                <td>{{ $row->total_produk }}</td>
                <td>Rp {{ number_format($row->total_transaksi, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
