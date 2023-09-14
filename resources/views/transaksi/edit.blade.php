@extends('transaksi\template_transaksi')
@section('title')

@section('content')
    <div class="container">
        <div class="row bg-light">
            <div class="col-md-6">
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif

                <form method="POST" action="/transaksi-edit/{{ $laporan->id_laporan }}">
                    @csrf
                    @method('PUT')
                    <div class="p-3 mb-4 mt-3">
                        <label for='nama_produk' class="h6">Nama Produk<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="nama_produk" class="form-control" type="text" name='nama_produk'
                                value="{{ old('nama_produk', $laporan->nama_produk) }}" required />
                        </div>
                        <label for='harga' class="h6">Harga<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="harga" class="form-control" type="text" name='harga'
                                value="{{ old('harga', $laporan->harga) }}" required />
                        </div>
                        <label for='total_produk' class="h6">Qty<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="total_produk" class="form-control" name='total_produk'
                                value="{{ old('total_produk', $laporan->total_produk) }}" required></textarea>
                        </div>

                        <script></script>

                        <label for='total_transaksi' class="h6">Total Transaksi<span
                                class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="total_transaksi" class="form-control" name='total_transaksi'
                                value="{{ old('total_transaksi', $laporan->total_transaksi) }}" required></textarea>
                        </div>
                        <label for='tanggal' class="h6">Tanggal<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="tanggal" class="form-control" type="date" name='tanggal'
                                value="{{ old('tanggal', $laporan->tanggal) }}" required />
                        </div>
                        <p></p>
                        <div class="mt-4">
                            <button class="btn btn-success" type="submit">ADD</button>
                            <button class="btn btn-danger"
                                onclick="event.preventDefault(); window.history.back();">BACK</button>
                        </div>
                    </div>
                </form>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#harga, #total_produk').on('input', function() {
                            let harga = parseFloat($('#harga').val());
                            let total_produk = parseFloat($('#total_produk').val());
                            let total_transaksi = harga * total_produk;
                            $('#total_transaksi').val(total_transaksi.toFixed(2));
                        });
                    });
                    setTimeout(function() {
                        $('.alert').slideUp();
                        console.log("Fungsi berjalan")
                    }, 3000);
                    // Menghapus pesan setelah 3 detik
                </script>
            </div>
        </div>
    </div>
@endsection
