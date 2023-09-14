@extends('etalase\template_etalase')
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
                <form method="POST" action="{{ route('etalase.store') }}">
                    @csrf
                    <div class="p-3 mb-4 mt-3">
                        <label for='nama' class="h5">Nama Etalase<span class='text-danger'>*</span></label>
                        <div class="mb-4">
                            <input class="form-control" type="text" name='nama' value="{{ old('nama') }}" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">ADD</button>
                            <a class="btn btn-danger" href="{{ route('etalase.index') }}">BACK</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
