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

<section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" style="background-image: url('{{ asset('assets/images/background/bg_1.jpg') }}');">
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
          <img src="assets/images/about/img_1.jpg" alt="image_not_found">
        </div>
      </div>

      <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
        <div class="about-content">
          <h2 class="title-text mb-40">The Best Infrastructure</h2>
          <p class="mb-30">
            Medical e-commerce refers to the online buying and selling of medical products and services, including pharmaceuticals, medical devices, health-related products, and services like telemedicine consultations. This rapidly growing sector leverages technology to improve access to healthcare and streamline the purchasing process for both consumers and healthcare providers.
          </p>
          <p class="mb-60">
            Medical e-commerce is transforming the way patients and healthcare providers interact and transact. With advancements in technology and increasing consumer demand, this sector is poised for significant growth, promising to enhance healthcare accessibility and efficiency.
          </p>
          <a href="#!" class="btn bg-custom-brown">Contact Us</a>
        </div>
      </div>
    </div>

    <div class="about-video text-center mb-100 clearfix">
      <h3 class="title-text mb-60">
        We offer and expand customized and innovative healthcare programs to our clients. 
      </h3>
      <div class="video-wrap">
        <img src="assets/images/about/img_2.jpg" alt="image_not_found">
        <a class="play-btn pulse" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
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
            <li>Sunday – Friday: 09:00am – 10:30pm</li>
            <li>Saturday: 10:00am – 02:00pm</li>
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
            <li>Email: Medisiaecommerce@gmail.com</li>
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

<section class="ftco-section img my-5" style="background-image: url({{ asset('home-asset/images/bg_3.jpg') }});">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        <span class="subheading">Best Deal For You</span>
        <h2 class="mb-4">Get Medical Tools You Need</h2>
        <a href="{{ route('product.index') }}" class="btn bg-custom-brown">
          View Products
        </a>
      </div>
    </div>
  </div>
</section>

@endsection