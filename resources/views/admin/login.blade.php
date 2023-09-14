@extends('admin/template_signin')
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

    <body class="">
        <main class="main-content  mt-0">
            <section>
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <div class="page-header min-vh-75">
                    <div class="container mt-n4">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto mt-n1">
                                <div class="card card-plain mt-9">
                                    <div class="card-header pb-0 text-left bg-transparent">
                                        <h3 class="font-weight-bolder text-info text-gradient">Welcome to Sada Hobby</h3>
                                        <p class="mb-0">Enter your username and password to sign in</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login.action') }}">
                                            @csrf
                                            <label for='username'>Username<span class='text-danger'>*</span></label>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" name='username'
                                                    value="{{ old('username') }}" />
                                            </div>
                                            <div class="mb-3">
                                                <label>Password <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="password" name='password' />
                                            </div>
                                            <div class="text-center">
                                                <button class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                    in</button>
                                            </div>
                                            {{-- <div class="mb-3">
                                                <button class="btn btn-primary">Login</button>
                                                <a class="btn btn-secondary" href="{{ route('register') }}">Register</a>
                                            </div> --}}
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-4 text-sm mx-auto">
                                            Don't have an account?
                                            <a href="{{ route('register') }}"
                                                class="text-info text-gradient font-weight-bold">Sign
                                                up</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-0">
                                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                        style="background-image:url('{{ asset('soft-ui-dashboard-main') }}/assets/img/curved-images/curved30.jpg')">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script src="{{ asset('soft-ui-dashboard-main') }}/assets/js/core/popper.min.js"></script>
        <script src="{{ asset('soft-ui-dashboard-main') }}/assets/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('soft-ui-dashboard-main') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('soft-ui-dashboard-main') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
@endsection
