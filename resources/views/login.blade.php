@extends('layouts.main')

@section('content')

<div id="thetop"></div>
<div id="backtotop">
  <a href="#" id="scroll">
    <i class="las la-arrow-up"></i>
  </a>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 18vh;">
</div>

<section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" style="background-image: url('{{ asset('assets/images/background/bg_1.png') }}');">
  <div class="container text-center">
    <h1 class="page-title mb-3">Login</h1>
    <div class="breadcrumb-nav ul-li-center clearfix">
      <ul class="clearfix">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Login</li>
      </ul>
    </div>
  </div>

  <span class="decoration-image pill-image-1">
    <img src="{{ asset('assets/images/decoration/pill_1.png') }}" alt="pill_image_not_found">
  </span>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 ftco-animate">

        @if (session()->has('success'))
        <div class="alert alert-primary alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="alert-message">
            {{ session('success') }}
          </div>
        </div>
        @endif

        @if (session()->has('login-error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="alert-message">
            {{ session('login-error') }}
          </div>
        </div>
        @endif

        <h3 class="mb-4 billing-heading">Login</h3>

        <form action="{{ route('authenticate') }}" class="billing-form" id="form-register" method="post">
          @csrf

          <div class="row align-items-end">
            <div class="col-md-12">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required class="form-control @error('email') is-invalid @enderror"
                  style="color:black !important" placeholder="" id="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required
                  class="form-control @error('password') is-invalid @enderror" style="color:black !important"
                  placeholder="" id="password">
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="w-100"></div>
          <button class="d-block mx-auto btn bg-custom-brown py-3 px-4" style="width:70% !important;">Login</button>
        </form>

        <p class="mt-4 text-center">Need an account ? <a href="{{ route('register') }}">Register
            Now</a></p>
      </div>
    </div>

  </div>

  </div>
</section> <!-- .section -->

@endsection