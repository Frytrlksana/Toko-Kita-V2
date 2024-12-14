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
    <h1 class="page-title mb-3">About Us</h1>
    <div class="breadcrumb-nav ul-li-center clearfix">
      <ul class="clearfix">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">About Us</li>
      </ul>
    </div>
  </div>

  <span class="decoration-image pill-image-1">
    <img src="{{ asset('assets/images/decoration/pill_1.png') }}" alt="pill_image_not_found">
  </span>
</section>

<section id="about-section" class="about-section sec-ptb-100 pb-0 clearfix">
  <div class="container">

    <div class="row mb-100 align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
      <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
        <div class="about-image">
          <img src="assets/images/about/img_1.png" alt="image_not_found">
        </div>
      </div>

      <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
        <div class="about-content">
          <h2 class="title-text mb-40">The Best Infrastructure</h2>
          <p class="mb-20">
            Selamat datang di TOKO KITA , tempat terbaik  untuk menikmati aneka jajanan dan minuman yang mengunggah selera !
          </p>
          <p class="mb-20">
            Kami menyediakan aneka jajanan lezat dan minuman ssgar, semuanya dibuat dengan bahan berkualitas dan penuh cinta.
          </p>
          <p class="mb-20">
            Nikmati momen seru bersama kami, baik di toko maupun di rumah. Karena di sini rasa tak pernah bohong!
          </p>
          <p class="mb-20">
            Kami percaya bahwa setiap gigitan dan teguan harus membawa kebahagiaan!
          </p>
          <p class="mb-60">
            TOKO KITA - Tempat Jajanan & Minuman Favorit Anda!
          </p>
          <a href="#!" class="btn bg-custom-brown">Contact Us</a>
        </div>
      </div>
    </div>

    <div class="about-video text-center mb-100 clearfix">
      <h3 class="title-text mb-60">
        TOKO KITA, Your Loyal Friend Every Sweet Moment! 
      </h3>
      <div class="video-wrap">
        <img src="assets/images/about/img_2.png" alt="image_not_found">
        <a class="play-btn pulse" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126629.74596701816!2d112.64824901640625!3d-7.333721200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fab87edcad15%3A0xb26589947991eea1!2sUniversitas%20Pembangunan%20Nasional%20%E2%80%9CVeteran%E2%80%9D%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1734095118385!5m2!1sen!2sid" target="_blank">
    Open in Google Maps
</a>

          <span></span>
        </a>
      </div>
    </div>

    <div class="row mt--40 justify-content-lg-between justify-content-md-center justify-content-sm-center">
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="primary-contact-info ul-li-block">
          <span class="item-icon">
            <i class="las la-clock"></i>
          </span>
          <h3 class="item-title">Opening Time</h3>
          <ul class="clearfix">
            <li>Sunday – Friday: 09:00 – 22:00</li>
            <li>Saturday – Sunday: 09:00 – 00:00</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="primary-contact-info ul-li-block">
          <span class="item-icon">
            <i class="las la-headset"></i>
          </span>
          <h3 class="item-title">Contact Info.</h3>
          <ul class="clearfix">
            <li>Email: Tokokita@gmail.com</li>
            <li>Mobile: +62 895627560574</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="primary-contact-info ul-li-block">
          <span class="item-icon">
            <i class="las la-map-marked-alt"></i>
          </span>
          <h3 class="item-title">Contact Address</h3>
          <ul class="clearfix">
            <li>Jl. Rungkut Madya, Gn. Anyar, Kec. Gn. Anyar</li>
            <li>Surabaya, Jawa Timur 60294</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="ftco-section img my-5" style="background-image: url({{ asset('home-asset/images/bg_3.png') }});">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        <span class="subheading">Bundling!</span>
        <h2 class="mb-4">Sweet and Sip Combo</h2>
        <a href="{{ route('product.index') }}" class="btn bg-custom-brown">
          View Products
        </a>
      </div>
    </div>
  </div>
</section>

@endsection