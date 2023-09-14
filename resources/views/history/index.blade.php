@extends('history\template_history')
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
        <style>
            tbody td {
                font-size: 14px;
                /* Ubah ukuran font sesuai keinginan */
            }
        </style>
    </head>
    <div class="card">
        <div class="card-header">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" type="text" name="query" value="{{ $query }}"
                        placeholder="Search here..." style="width: 500px;" />
                </div>
                <div class="col">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <div>

        </div>
        <div class="card-body p-3 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:5%;" height="10%">No</th>
                        <th width="15%" height="10%">Waktu</th>
                        <th height="10%">Aktivitas</th>
                        <th style="width:15%;">User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <?php
                            $dateTime = new DateTime($item->created_at);
                            $newDate = $dateTime->format('H:i:s - d/m/Y');
                            ?>
                            <td>{{ $newDate }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->user['username'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $history->links('vendor.pagination.pagination') }}
        </div>


    @endsection
