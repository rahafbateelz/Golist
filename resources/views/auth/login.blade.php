@extends('layouts.master-without-nav') @section('title') @lang('translation.Register') 2 @endsection @section('css')
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css"> @endsection @section('body') <body class="auth-body-bg">
<body style="background-color: #fafafa !important"> 
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a href="index" class="d-block auth-logo">
        <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="18" class="auth-logo-dark">
        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light">
      </a>
    </div>
  </nav> 
  @endsection @section('content')
  <br>
  <br>
   <div class="container">
    <div class="d-flex col-l-6 justify-content-center" >
      <div class="auth-full-page-content p-md-5 p-4"   style="background-color: #ffffff !important; border:solid 1px #dbdbdb; border-radius:8px;">
        <div class="w-100 ">
          <div class="d-flex flex-column h-100 " >
            <div class="mb-4 mb-md-5">
              <a href="index" class="d-block auth-logo">
                <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="18" class="auth-logo-dark">
                <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light">
              </a>
            </div>
            <h5 class="text-danger">Login</h5>
            <div class="mt-4">
              <form class="form-horizontal" method="POST" action="{{ route('login') }}"> @csrf <div class=" input-group mb-3">
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', 'admin@themesbrand.com') }}" id="username" placeholder="Enter Email" autocomplete="email" autofocus> @error('email') <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span> @enderror
                </div>
                <div class="input-group mb-3">
                  <div class="float-end"> @if (Route::has('password.request')) <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a> @endif </div>
                  <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="123456" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                    <button class="btn btn-light " type="button" id="password-addon">
                      <i class="mdi mdi-eye-outline"></i>
                    </button> @error('password') <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span> @enderror
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input bg-danger" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember"> Remember me </label>

                </div>
                <div class="mt-3 d-grid">
                  <button class="btn btn-danger waves-effect waves-light" type="submit">Log In</button>
                </div>
                <div class="mt-4 text-center">
                  <h5 class="font-size-14 mb-3">Sign in with</h5>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="social-list-item bg-primary text-white border-primary">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="social-list-item bg-info text-white border-info">
                        <i class="mdi mdi-apple"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="social-list-item bg-danger text-white border-danger">
                        <i class="mdi mdi-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </form>
              <div class="mt-5 text-center">
                <p>Don't have an account ? <a href="{{ url('register') }}" class="fw-medium text-danger"> Signup now </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
  </div>
  <!-- end row -->
  </div>
  <br>
  <br>
  <nav class="navbar navbar-light bg-light">
    <div class="container text-center">
      <p>&copy; 2022 Monolist</p>
    </div>
  </nav>
  <!-- end container-fluid -->
  </div> @endsection @section('script') <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <!-- owl.carousel js -->
  <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
  <!-- auth-2-carousel init -->
  <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script> @endsection


 
