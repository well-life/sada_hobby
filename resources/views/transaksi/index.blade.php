@extends('transaksi\template_transaksi')
@section('title')

@section('content')

    <style>
        .form-select {
            width: 130px;
            /* Atur lebar sesuai kebutuhan */
        }
    </style>
    <div class="card">
        <div class="card-header">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" type="text" name="query" value="{{ $query }}"
                        placeholder="Search here..." />
                </div>
                <div class="col">
                    <select class="form-select" name="bulan">
                        <option value="">All</option>
                        <option value="1" {{ $bulan == 1 ? 'selected' : '' }}>Januari</option>
                        <option value="2" {{ $bulan == 2 ? 'selected' : '' }}>Februari</option>
                        <option value="3" {{ $bulan == 3 ? 'selected' : '' }}>Maret</option>
                        <option value="4" {{ $bulan == 4 ? 'selected' : '' }}>April</option>
                        <option value="5" {{ $bulan == 5 ? 'selected' : '' }}>Mei</option>
                        <option value="6" {{ $bulan == 6 ? 'selected' : '' }}>Juni</option>
                        <option value="7" {{ $bulan == 7 ? 'selected' : '' }}>Juli</option>
                        <option value="8" {{ $bulan == 8 ? 'selected' : '' }}>Agustus</option>
                        <option value="9" {{ $bulan == 9 ? 'selected' : '' }}>September</option>
                        <option value="10" {{ $bulan == 10 ? 'selected' : '' }}>Oktober</option>
                        <option value="11" {{ $bulan == 11 ? 'selected' : '' }}>November</option>
                        <option value="12" {{ $bulan == 12 ? 'selected' : '' }}>Desember</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="tahun">
                        <option value="">All</option>
                        <option value="2020" {{ $tahun == 2020 ? 'selected' : '' }}>2020</option>
                        <option value="2021" {{ $tahun == 2021 ? 'selected' : '' }}>2021</option>
                        <option value="2022" {{ $tahun == 2022 ? 'selected' : '' }}>2022</option>
                        <option value="2023" {{ $tahun == 2023 ? 'selected' : '' }}>2023</option>
                        <option value="2024" {{ $tahun == 2024 ? 'selected' : '' }}>2024</option>
                    </select>
                </div>
                <div class="col">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <div class="card-body p-3 table-responsive">
            <button class="btn btn-secondary"><span style="font-weight: bold">+</span> <a href="transaksi/create">Add
                    Data</a></button>
            <a class="btn btn-info"
                href="{{ route('laporan.pdf', ['query' => $query, 'bulan' => $bulan, 'tahun' => $tahun]) }}"
                target="_blank">Export to PDF</a>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">No</th>
                        <th class="text-center" style="vertical-align: middle;">Tanggal</th>
                        <th class="text-center" style="vertical-align: middle;">Nama</th>
                        <th class="text-center" style="vertical-align: middle;">Harga</th>
                        <th class="text-center" style="vertical-align: middle;">Qty</th>
                        <th class="text-center" style="vertical-align: middle;">Total Transaksi</th>

                        <th class="text-center" style="vertical-align: middle;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $row)
                        <tr>
                            <td class="text-center" style="vertical-align: middle;">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-center" style="vertical-align: middle;">
                                <?php
                                $dateTime = new DateTime($row->tanggal);
                                $newDate = $dateTime->format('d/m/Y');
                                ?>
                                {{ $newDate }}
                            </td>
                            <td class="text-center" style="vertical-align: middle;">
                                {{ $row->nama_produk }}
                            </td>
                            <td class="text-center" style="vertical-align: middle;">
                                Rp {{ number_format($row->harga, 0, ',', '.') }}
                            </td>
                            <td class="text-center" style="vertical-align: middle;">
                                {{ $row->total_produk }}
                            </td>
                            <td class="text-center" style="vertical-align: middle;">
                                Rp {{ number_format($row->total_transaksi, 0, ',', '.') }}
                            </td>

                            <td class="text-center" style="vertical-align: middle;">
                                <a class="btn btn-warning"
                                    href="{{ route('transaksi.edit', ['id' => $row->id_laporan]) }}">Edit</a>
                                <a class="btn btn-danger" href="/transaksi/delete/{{ $row->id_laporan }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $laporan->links('vendor.pagination.pagination') }}
        </div>

    </div>
@endsection
