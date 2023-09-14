<?php $id = request()->segment(count(request()->segments())); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/favicon.png">
    <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/app.css" rel="stylesheet">
    <title>
        Sada Hobby
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

    <title>@yield('title', $title)</title>
    <style>
        .price-tag {
            position: absolute;
            top: 152px;
            background-color: #80f602;
            right: 0px;
            width: 80px;
            padding: 2px;
            font-weight: bold;
            font-size: 12px;
            color: #FFF;
            border-radius: 10px 0 0 0;
        }

        .price-tag2 {
            position: absolute;
            top: 1px;
            background-color: #80f602;
            right: 1px;
            width: 35px;
            height: 35px;
            padding: 2px;
            font-weight: bold;
            font-size: 12px;
            color: #FFF;
            border-radius: 20px 20px 20px 20px;
        }

        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            color: black;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/home">
                <img src="{{ asset('soft-ui-dashboard-main') }}/assets/img/logo-ct-dark.png"
                    class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Sada Hobby</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <div
                            class="icon icon-shape icon-sm fa fa-home shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('etalase.index') }}">
                        <div
                            class="icon icon-shape icon-sm fa fa-store shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>office</title>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Etalase</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="/forecasting">
                        <div
                            class="icon icon-shape icon-sm fa fa-atom shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Forecasting</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">
                        <div
                            class="icon icon-shape icon-sm fa fa-history shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>box-3d-50</title>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/transaksi">
                        <div
                            class="icon icon-shape icon-sm fa fa-file shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>box-3d-50</title>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Laporan Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('password') }}">
                        <div
                            class="icon icon-shape icon-sm fa fa-key shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>box-3d-50</title>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Password Change</span>
                    </a>
                </li>
            </ul>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title', $title)
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">@yield('title', $title) <b>=> {{ $etalase[0]->nama }}
                        </b> </h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">

                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">{{ Auth::user()->username }}</span>
                            </a>
                        </li>

                        <li class="nav-item d-flex align-items-center px-2">
                            <a href="{{ route('logout') }}">
                                <i class="fa fa-sign-out cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mx-auto mt-4">
            <div class="row" style="background: white; padding: 10px">
                <form class="row row-cols-auto g-1">
                    <div class="col">
                        <input class="form-control" type="text" name="query" value="{{ $query }}"
                            placeholder="Search here..." style="width: 500px;" />
                    </div>
                    <div class="col">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @elseif(session('update'))
                    <p class="alert alert-secondary">{{ session('update') }}</p>
                @elseif(session('delete'))
                    <p class="alert alert-danger">{{ session('delete') }}</p>
                @endif
                @foreach ($productList as $data)
                    @if ($data->etalase['id_etalase'] == $id)
                        <div class="col-md-4">
                            <div class="card border border-dark"
                                style="width: 15rem; height: 25rem; background: #cbb976;">
                                @if ($data->image === '')
                                    <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/10/10/2032e465-d7fb-4478-ba4d-f1ca255f8a50.jpg"
                                        class="card-img-top" height="175px" alt="Gambar">
                                @elseif($data->image)
                                    <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top"
                                        style="object-fit: fill;" height="175px" alt="Gambar">
                                @endif
                                <div class="price-tag2">
                                    <p class="centered">{{ $data->stok }}</p>
                                </div>
                                <div class="price-tag">
                                    <center>Rp {{ number_format($data->harga, 0, ',', '.') }}</center>
                                </div> <!-- Papan harga -->
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->nama }}</h5>
                                    <p class="card-text" style="font-size: 12px">{{ $data->deskripsi }}</p>
                                    <div class="d-flex justify-content-between position-absolute bottom-0 start-10"
                                        style="width: 12rem">
                                        <a href="{{ $id }}/edit/{{ $data->id_product }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ $id }}/delete/{{ $data->id_product }}"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            {{ $productList->links('vendor.pagination.pagination') }}
        </div>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-primary position-fixed px-3 py-2" href="{{ $id }}/create">
                <i class="fa fa-plus fa-2x py-2"> </i>
            </a>
        </div>

        <!--   Core JS Files   -->

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('soft-ui-dashboard-main') }}/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
