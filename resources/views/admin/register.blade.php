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

        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('soft-ui-dashboard-main') }}/assets/css/soft-ui-dashboard.css?v=1.0.7"
            rel="stylesheet" />
    </head>
    <section class="vh-80" style="background-color: #eee;">
        <div class="container h-80">
            <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $err)
                                            <p class="alert alert-danger">{{ $err }}</p>
                                        @endforeach
                                    @endif

                                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('register.action') }}">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label>Name <span class='text-danger'>*</span></label>
                                                <input type="text" id="name" class="form-control" name='name'
                                                    value="{{ old('name') }}" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label>Username <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="text" name='username'
                                                    value="{{ old('username') }}" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label>Password <span class='text-danger'>*</span></label>
                                                <input class="form-control" type="password" name='password' />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label>Password Confirmation<span class='text-danger'>*</span></label>
                                                <input class="form-control" type="password" name='password_confirmation' />
                                            </div>
                                        </div>
                                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                            <p class="mb-4 text-sm mx-auto">
                                                If You Already Have an Account, Go to <br>
                                                <a href="{{ route('login') }}"
                                                    class="text-info text-gradient font-weight-bold"><u>Login</u></a>
                                            </p>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn bg-gradient-info w-100 mt-2 mb-0">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-5 col-lg-5 col-xl-7 d-flex align-items-center order-11 order-lg-1 ">

                                    <img src="https://img.freepik.com/free-photo/fun-trex-3d-illustration_183364-81258.jpg?w=740&t=st=1677156050~exp=1677156650~hmac=16d9f5faf951d6005b27d0db3d2107e4588b2c30d09e6649083b696c967553cf"
                                        class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
