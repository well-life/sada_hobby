@extends('etalase\template_etalase')
@section('title')
@section('content')

    <div class="container">
        <div class="row bg-light">
            <div class="col-md-6">
                <form method="POST" action="/product-edit/{{ $product->id_product }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-3 mb-4 mt-3">
                        <label for='nama' class="h6">Nama Produk<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="nama" class="form-control" type="text" name='nama'
                                value="{{ old('nama', $product->nama) }}" required />
                        </div>
                        <label for='harga' class="h6">Harga<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="harga" class="form-control" type="text" name='harga'
                                value="{{ old('harga', $product->harga) }}" required />
                        </div>
                        <label for='stok' class="h6">Stok<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="stok" class="form-control" type="text" name='stok'
                                value="{{ old('stok', $product->stok) }}" required />
                        </div>
                        <label for='description' class="h6">Deskripsi<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <textarea id="description" class="form-control" name='deskripsi' style="resize: none;" required>{{ old('deskripsi', $product->deskripsi) }}</textarea>
                        </div>

                        <label for='image' class="h6">Image</label>
                        <div class="mb-4">
                            <div id="image-preview">
                                @if ($product->image === '')
                                    <span class="badge rounded-pill bg-danger">Belum ada foto</span>
                                @elseif($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail"
                                        style="object-fit: cover;" width="50%">
                                @endif
                            </div>

                            <input type="file" class="form-control mt-2" id="image" name="image" accept="image/*"
                                onchange="previewImage(event)">
                        </div>

                        <script>
                            function previewImage(event) {
                                let reader = new FileReader();
                                reader.onload = function() {
                                    var output = document.getElementById('image-preview');
                                    output.innerHTML = '<img src="' + reader.result +
                                        '" class="img-thumbnail" style="object-fit: cover;" width="50%">';
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            }
                        </script>

                        <input type='hidden' name='id_etalase' value="{{ request()->route('id') }}" readonly required />
                        <p></p>
                        <div class="mb-3">
                            <button class="btn btn-warning" type="submit">Update</button>
                            <button class="btn btn-danger"
                                onclick="event.preventDefault(); window.history.back();">BACK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
