@extends('etalase\template_etalase')
@section('title')
@section('content')
    <?php $id = request()->segment(count(request()->segments())); ?>

    <div class="container">
        <div class="row bg-light">
            <div class="col-md-6">
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form method="POST" action="product" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3 mb-4 mt-3">
                        <label for='nama' class="h6">Nama Produk<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="nama" class="form-control" type="text" name='nama' value=""
                                required />
                        </div>
                        <label for='harga' class="h6">Harga<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="harga" class="form-control" type="text" name='harga' value=""
                                required />
                        </div>
                        <label for='stok' class="h6">Stok<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input id="stok" class="form-control" type="text" name='stok' value=""
                                required />
                        </div>
                        <label for='description' class="h6">Deskripsi<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <textarea id="description" class="form-control" name='deskripsi' style="resize: none;" required></textarea>
                        </div>
                        <label for='image' class="h6">Image</label>
                        <div class="input-group mb-4">
                            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                onchange="previewImage(event)">
                        </div>
                        <div id="image-preview"></div>
                        <input type='hidden' name='id_etalase' value="{{ request()->route('id') }}" readonly required />
                        <p></p>
                        <div class="mt-4">
                            <button class="btn btn-success" type="submit">ADD</button>
                            <button class="btn btn-danger" onclick="history.back()">BACK</button>
                        </div>
                    </div>
                </form>
                <script>
                    function previewImage(event) {
                        let reader = new FileReader();
                        reader.onload = function() {
                            var output = document.createElement('img');
                            output.src = reader.result;
                            output.className = 'img-thumbnail';
                            output.style.objectFit = 'cover';
                            output.style.width = '50%';

                            let previewContainer = document.getElementById('image-preview');
                            previewContainer.innerHTML = '';
                            previewContainer.appendChild(output);
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
