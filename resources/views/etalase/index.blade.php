@extends('etalase\template_etalase')
@section('title')
@section('content')

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/favicon.png">
        <title>
            Soft UI Dashboard by Creative Tim
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('soft-ui-dashboard-main') }}/assets/css/soft-ui-dashboard.css?v=1.0.7"
            rel="stylesheet" />
    </head>
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
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <div class="card-body p-3 table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <th>No</th>
                    <th>Name</th>
                    <th>Total Product</th>
                    <th>Action</th>
                </thead>
                @foreach ($etalase as $row)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <a href="{{ route('product', $row['id_etalase']) }}">{{ $row['nama'] }}</a>
                        </td>
                        <td>
                            {{ $row['count'] }}
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('etalase.edit', $row['id_etalase']) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $etalase->links('vendor.pagination.pagination') }}
            <div class="fixed-plugin">
                <a class="fixed-plugin-button text-primary position-fixed px-3 py-2" href="{{ route('etalase.create') }}">
                    <i class="fa fa-plus fa-2x py-2"> </i>
                </a>
            </div>
        </div>
    </div>
@endsection
