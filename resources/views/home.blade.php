<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/sada_hobby.jpg">
    <link rel="icon" type="image/png" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/sada_hobby.jpg">
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

</head>
@auth
    {{-- <div>
            <p>Welcome <b>{{ Auth::user()->username }}</b></p>
            <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        </div> --}}
    <!-- End Navbar -->

    <body class="g-sidenav-show  bg-gray-100">
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
            id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href="/home" target="_blank">
                    <img src="{{ asset('soft-ui-dashboard-main') }}/assets/img/logo-ct-dark.png"
                        class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-1 font-weight-bold">Sada Hobby</span>
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  active" href="/home">
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
                        <a class="nav-link " href="{{ route('etalase.index') }}">
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
                        <a class="nav-link" href="/password">
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
                        <h6 class="font-weight-bolder mb-0">@yield('title', $title)</h6>
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


            {{-- Content --}}
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Etalase</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                {{ $etalase }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="fa fa-store text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Produk</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                {{ $product }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="fa fa-list-alt text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-5"></div>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card w-75 h-25 p-1 mt-3 mb-3 ms-3" style="background-color: #323f38; color: white">
                            <div class="card-body">
                                <h5 class="card-title">Etalase</h5>
                                <p class="card-text">Buka daftar Etalase untuk menampilkan seluruh etalase yang tersimpan
                                    di Inventory.
                                </p>
                                <a href="/etalase" class="btn btn-success">Etalase</a>
                            </div>
                        </div>
                        <div class="card w-75 h-25 p-1 mt-3 mb-3 ms-3" style="background-color: #323f38; color: white">
                            <div class="card-body">
                                <h5 class="card-title">Forecasting</h5>
                                <p class="card-text">Melakukan peramalan penjualan dengan menggunakan fitur Forecasting.
                                </p>
                                <a href="/forecasting" class="btn btn-success">Forecasting</a>
                            </div>
                        </div>
                        <div class="card w-75 h-25 p-1 mt-3 mb-3 ms-3" style="background-color: #323f38; color: white">
                            <div class="card-body">
                                <h5 class="card-title">History</h5>
                                <p class="card-text">Buka riwayat aktivitas pengguna saat menggunakan inventory.
                                </p>
                                <a href="/history" class="btn btn-success">History</a>
                            </div>
                        </div>
                        <div class="card w-75 h-25 p-1 mt-3 mb-3 ms-3" style="background-color: #323f38; color: white">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Transaksi</h5>
                                <p class="card-text">Membuat laporan transaksi yang terjadi sesuai pesanan.
                                </p>
                                <a href="/transaksi" class="btn btn-success">Laporan Transaksi</a>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

    </body>

    </html>
@endauth
@guest
    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
    <a class="btn btn-danger" href="{{ route('register') }}">Register</a>
@endguest
