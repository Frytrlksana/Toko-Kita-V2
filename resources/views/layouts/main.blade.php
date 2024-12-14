<!DOCTYPE html>
<html lang="en">

<head>
  <title>TokoKita | Tampatnya Camilan & Minuman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('home-asset/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home-asset/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('home-asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home-asset/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home-asset/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('home-asset/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('home-asset/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('home-asset/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('home-asset/css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('home-asset/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('home-asset/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('home-asset/css/style.css') }}">

  <!-- CSS Include -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
  <!-- Custom CSS Include -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

  <style>
    .link-disabled {
      pointer-events: none;
    }

    .separator {
      display: flex;
      align-items: center;
      text-align: center;
    }

    .separator::before,
    .separator::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    }

    .separator::before {
      margin-right: .25em;
    }

    .separator::after {
      margin-left: .25em;
    }
  </style>


</head>

<body class="home-v1">

  <!-- sidebar mobile menu - start -->
  <div class="sidebar-menu-wrapper">
    <div id="sidebar-menu" class="sidebar-menu">

      <span class="close-btn">
        <i class="las la-times"></i>
      </span>

      <div class="brand-logo text-center clearfix">
        <a href="index.html" class="brand-link">
          <img src="assets/images/logo/logo_2.png" alt="logo_not_found">
        </a>
      </div>

      <div class="search-wrap">
        <form action="#!">
          <div class="form-item mb-0">
            <input type="search" name="search" placeholder="Search your Products">
            <button type="submit">
              <i class="la la-search" style="color: #74512D;"></i> 
            </button>
            
          </div>
        </form>
      </div>

      <div id="mobile-accordion" class="mobile-accordion">
        <div class="card">
            <div class="card-header" id="heading-one">
                <button data-toggle="collapse" data-target="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
                    <i class="las la-shopping-bag"></i> 
                    Cart Item : {{ Cart::count() }}
                </button>
            </div>
    
            <div id="collapse-one" class="collapse" aria-labelledby="heading-one" data-parent="#mobile-accordion">
                <div class="card-body">
                    @if(Auth::check())
                        <div class="cart-items-list ul-li-block clearfix">
                            <ul class="clearfix">
                                @foreach(Cart::content() as $item)
                                    <li>
                                        <div class="item-image">
                                            <img src="{{ $item->options->image }}" alt="image_not_found">
                                        </div>
                                        <div class="item-content">
                                            <h4 class="item-title">{{ $item->name }}</h4>
                                            <span class="item-price">Rp. {{ number_format($item->price, 2) }}</span>
                                        </div>
                                        <form action="{{ route('cart.delete') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <button type="submit" class="remove-btn" aria-label="Remove item">
                                                <i class="las la-times"></i>
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
    
                        <div class="btns-group ul-li clearfix">
                            <ul class="clearfix">
                                <li><a href="{{ url('cart') }}" class="btn bg-custom-brown">View Cart</a></li>
                                <li><a href="{{ route('admin.checkout.index') }}" class="btn bg-custom-brown">Checkout</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="cart-dropdown">
                            <button class="btn-cart" onclick="window.location.href='{{ url('/login') }}'" aria-haspopup="true" aria-expanded="false">
                                <i class="las la-shopping-bag"></i>
                                <small class="cart-counter bg-light-green"></small> <!-- Total Count -->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cart-dropdown">
                                <h3 class="title-text">You need to login to view your cart.</h3>
                                <div class="text-center">
                                    <a href="{{ url('/login') }}" class="btn bg-light-green">Login</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    

      <div class="menu_list ul-li-block clearfix">
        <h3 class="widget-title">Menu List</h3>

        <ul class="clearfix">
          <li class="menu-item-has-child">
            <a href="{{ url('/') }}">Home </a>
          </li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li class="menu-item-has-child">
            <a href="{{ url('/product') }}">Shop</a>
          </li>
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/cart') }}">Cart Page</a></li>
              <li><a href="{{ route('admin.checkout.index') }}">Checkout Page</a></li>
            </ul>
          </li>
          {{-- <li><a href="{{ url('/contact') }}">Contact</a></li> --}}
        </ul>
      </div>

      <div class="user-dropdown ul-li-block clearfix">
        <h3 class="widget-title">User Settings</h3>
        <ul class="clearfix">
          <li><a href="{{ route('admin.profile.index') }}"><i class="las la-user-circle"></i> Profile</a></li>
          <li><a href="{{ route('admin.profile.edit') }}"><i class="las la-user-cog"></i> Settings</a></li>
          <li>
            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="las la-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        </ul>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
  <!-- sidebar mobile menu - end -->
  
  <header id="header-section" class="header-section header-primary sticky-header clearfix">
    <div class="content-wrap d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
  
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="brand-logo clearfix">
              <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ asset('assets/images/logo/logo_2.png') }}" alt="logo_not_found">
              </a>
              <div class="btns-group ul-li-right clearfix">
                <ul class="clearfix">
                  <li>
                    <button type="button" class="mobile-menu-btn">
                      <i class="las la-bars"></i>
                    </button>
                  </li>
                  <li>
                    <button class="mobile-btn-cart">
                      <i class="las la-shopping-bag"></i>
                      <small class="cart-counter bg-custom-brown">{{ Cart::count() }}</small>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
  
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <nav class="main-menu ul-li-center clearfix">
              <ul class="clearfix">
                <li class="menu-item-has-child">
                  <a href="{{ url('/') }}">Home </a>
                </li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li class="menu-item-has-child">
                  <a href="{{ url('/product') }}">Shop</a>
                </li>
                <li class="menu-item-has-child">
                  <a href="#!">Pages</a>
                  <ul class="submenu">
                    <li><a href="{{ url('/cart') }}">Cart Page</a></li>
                    <li><a href="{{ route('admin.checkout.index') }}">Checkout Page</a></li>
                  </ul>
                </li>
                {{-- <li><a href="{{ url('/contact') }}">Contact</a></li> --}}
              </ul>
            </nav>
          </div>
  
          <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
            <div class="btns-group ul-li-right clearfix">
              <ul class="clearfix">
    
                <li class="dropdown">
                  <button type="button" class="btn-user" id="user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="lar la-user"></i>
                  </button>
                  <div aria-labelledby="user-dropdown" class="user-dropdown dropdown-menu ul-li-block clearfix">
                      
                      @auth
                          <!-- If the user is logged in -->
                          <div class="profile-info clearfix">
                              <a href="{{ route('admin.profile.index') }}" class="user-thumbnail">
                                  <img src="{{ asset('assets/images/meta/img_2.png') }}" alt="thumbnail_not_found">
                              </a>
                              <div class="user-content">
                                  <h4 class="user-name">
                                      <a href="{{ route('admin.profile.index') }}">{{ Auth::user()->name }}</a>
                                  </h4>
                                  <span class="user-title">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span>
                              </div>
                          </div>
                          <ul class="clearfix">
                              <li><a href="{{ route('admin.profile.index') }}"><i class="las la-user-circle"></i> Profile</a></li>
                              <li><a href="{{ route('admin.profile.edit') }}"><i class="las la-user-cog"></i> Settings</a></li>
                              <li>
                                  <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="las la-sign-out-alt"></i> Logout
                                  </a>
                                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </li>
                          </ul>
                      @endauth
              
                      
                      @guest
                          <!-- If the user is not logged in -->
                          <ul class="clearfix">
                            <li>
                                <a href="{{ route('login') }}" class="text-light-green">
                                    <i class="las la-sign-in-alt"></i> Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}" class="text-light-green">
                                    <i class="las la-user-plus"></i> Register
                                </a>
                            </li>
                        </ul>                        
                      @endguest
                  </div>
              </li>
              
                
            
                {{-- <li class="dropdown">
                  @if(Auth::check()) <!-- Memeriksa apakah pengguna sudah login -->
                      <button type="button" class="btn-cart" id="cart-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="las la-shopping-bag"></i>
                          <small class="cart-counter">03</small>
                      </button>
                      <div aria-labelledby="cart-dropdown" class="cart-dropdown dropdown-menu ul-li-block clearfix">
                          <h3 class="item-title">Shopping Cart</h3>
                          <ul class="clearfix">
                              <li>
                                  <div class="cart-item clearfix">
                                      <div class="cart-thumb">
                                          <a href="#!">
                                              <img src="{{ asset('assets/images/cart/img_1.png') }}" alt="cart_img_not_found">
                                          </a>
                                      </div>
                                      <div class="cart-content">
                                          <h3 class="item-title"><a href="#!">Cough Syrup</a></h3>
                                          <span class="item-quantity">1 × <span class="item-price">$15</span></span>
                                      </div>
                                      <button class="remove-item"><i class="las la-times"></i></button>
                                  </div>
                              </li>
                              <li>
                                  <div class="cart-item clearfix">
                                      <div class="cart-thumb">
                                          <a href="#!">
                                              <img src="{{ asset('assets/images/cart/img_2.png') }}" alt="cart_img_not_found">
                                          </a>
                                      </div>
                                      <div class="cart-content">
                                          <h3 class="item-title"><a href="#!">Paracetamol</a></h3>
                                          <span class="item-quantity">2 × <span class="item-price">$30</span></span>
                                      </div>
                                      <button class="remove-item"><i class="las la-times"></i></button>
                                  </div>
                              </li>
                          </ul>
                          <div class="cart-total">
                              <h3>Total: <span>$45</span></h3>
                          </div>
                          <div class="cart-btns text-center">
                              <a href="{{ url('/cart') }}" class="btn btn-light">View Cart</a>
                              <a href="{{ url('/checkout') }}" class="btn btn-dark">Checkout</a>
                          </div>
                      </div>
                  @else
                      <button type="button" class="btn-cart" onclick="window.location.href='{{ url('/login') }}'">
                          <i class="las la-shopping-bag"></i>
                          <small class="cart-counter">03</small>
                      </button>
                      <div class="cart-dropdown dropdown-menu ul-li-block clearfix">
                          <h3 class="item-title">You need to login to access your shopping cart.</h3>
                          <div class="text-center">
                              <a href="{{ url('/login') }}" class="btn btn-dark">Login</a>
                          </div>
                      </div>
                  @endif
              </li> --}}
              
              <li class="dropdown">
                @if(Auth::check()) <!-- Check if the user is logged in -->
                    <button class="btn-cart" id="cart-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="las la-shopping-bag"></i>
                        <small class="cart-counter bg-custom-brown">{{ Cart::count() }}</small> <!-- Total Count -->
                    </button>
                    <div class="cart-dropdown dropdown-menu" aria-labelledby="cart-dropdown">
                        <h3 class="title-text">Cart Items: {{ Cart::count() }}</h3>
            
                        <div class="cart-items-list ul-li-block clearfix">
                            <ul class="clearfix">
                                @foreach(Cart::content() as $item) <!-- Loop through cart items -->
                                    <li>
                                        <div class="item-image">
                                            <img src="{{ $item->options->image }}" alt="image_not_found">
                                        </div>
                                        <div class="item-content">
                                            <h4 class="item-title">{{ $item->name }}</h4>
                                            <span class="item-price">${{ number_format($item->price, 2) }}</span>
                                        </div>
                                        {{-- <button type="button" class="remove-btn" onclick="removeItem('{{ $item->rowId }}')"><i class="las la-times"></i></button> --}}
                                        <form action="{{ route('cart.delete') }}" method="POST" style="display: inline;">
                                          @csrf
                                          <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                          <button type="submit" class="remove-btn">
                                              <i class="las la-times"></i>
                                          </button>
                                        </form>
                                      
                                    </li>
                                @endforeach
                            </ul>
                        </div>
            
                        <div class="btns-group ul-li clearfix">
                            <ul class="clearfix">
                                <li><a href="{{ url('cart') }}" class="btn bg-custom-brown3">View Cart</a></li>
                                <li><a href="{{ route('admin.checkout.index') }}" class="btn bg-custom-brown">Checkout</a></li>
                            </ul>
                        </div>

                    </div>
                @else
                    <button class="btn-cart" onclick="window.location.href='{{ url('/login') }}'" aria-haspopup="true" aria-expanded="false">
                        <i class="las la-shopping-bag"></i>
                        <small class="cart-counter bg-custom-brown">0</small> <!-- Total Count -->
                    </button>
                    <div class="cart-dropdown dropdown-menu" aria-labelledby="cart-dropdown">
                        <h3 class="title-text">You need to login to view your cart.</h3>
                        <div class="text-center">
                            <a href="{{ url('/login') }}" class="btn bg-light-green">Login</a>
                        </div>
                    </div>
                @endif
            </li>
            
            
            

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="collapse main-search-collapse" id="main-search-collapse">
      <div class="search-bar">
        <form action="#!">
          <input type="text" placeholder="Search...">
          <button type="submit"><i class="la la-search"></i></button>
        </form>
      </div>
    </div>
  </header>

  @yield('content')


  <footer id="footer-section" class="footer-section pb-30 clearfix">
			<div class="container">

				<div class="widget-area mb-60 clearfix">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-md-center">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="about-content">
								<div class="brand-logo mb-4 clearfix">
									<a href="index.html" class="brand-link">
										<img src="assets/images/logo/medicia_2.png" alt="logo_not_found">
									</a>
								</div>
								<p class="mb-30">
									Kami percaya bahwa setiap gigitan dan teguan harus membawa kebahagiaan! TOKO KITA - Tempat Jajanan & Minuman Favorit Anda!
								</p>
								<div class="contact-info ul-li-block clearfix">
									<ul class="clearfix">
										<li>
											<span><i class="las la-map-marked-alt"></i></span>
											<a href="https://maps.app.goo.gl/ca1B6ucAvCFFi33aA" target="_blank" rel="noopener noreferrer">
                        Jl. Rungkut Madya, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294
                    </a>
										</li>
										<li>
                      <span><i class="las la-envelope-open-text"></i></span>
                      <a href="mailto:medisiaecommerce@gmail.com">
                          Tokokita@gmail.com
                      </a>
                  </li>                  
                  <li>
                    <span><i class="las la-phone-volume"></i></span>
                    <a href="https://wa.me/62895627560574" target="_blank" rel="noopener noreferrer">
                        +62 895627560574
                    </a>
                  </li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="useful-links ul-li-block clearfix">
								<h3 class="widget-title">Products</h3>
								<ul class="clearfix">
									<li><a href="#!">Chocolates</a></li>
									<li><a href="#!">Biscuits and Cookies</a></li>
									<li><a href="#!">Ice Cream</a></li>
									<li><a href="#!">Pastries and Cakes</a></li>
									<li><a href="#!">Candy and Sweets</a></li>
									<li><a href="#!">All Products</a></li>
									<li><a href="#!">Offer Sale</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="useful-links ul-li-block clearfix">
								<h3 class="widget-title">Quick Link</h3>
								<ul class="clearfix">
									<li><a href="#!">Support</a></li>
									<li><a href="#!">Refund Policy</a></li>
									<li><a href="#!">Shipping & Returns</a></li>
									<li><a href="#!">Tearms & Condition</a></li>
									<li><a href="#!">Help Center</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
							<div class="payment-cards ul-li mb-30 clearfix">
								<h3 class="widget-title">Payments</h3>
								<p class="mb-3">Secure Payments</p>
								<ul class="mb-3 clearfix">
									<li><a href="#!"><img src="assets/images/payment_card/card_1.png" alt="_not_found" width="40" height="25"></a></li>
									<li><a href="#!"><img src="assets/images/payment_card/card_2.png" alt="_not_found" width="40" height="21"></a></li>
									<li><a href="#!"><img src="assets/images/payment_card/card_3.png" alt="_not_found" width="50" height="25"></a></li>
								</ul>
								<p class="mb-0">Powred by <a href="#!">TokoKita</a></p>
							</div>

							<div class="social-icon-circle ul-li clearfix">
								<ul class="clearfix">
									<li><a href="#!"><i class="lab la-facebook-f"></i></a></li>
									<li><a href="#!"><i class="lab la-twitter"></i></a></li>
									<li><a href="#!"><i class="lab la-instagram"></i></a></li>
									<li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<div class="footer-bottom bg-gray text-center clearfix">
					<p class="mb-0">©Copyright 2024 <a href="#!">Toko Kita</a>. All Rights Reserved.</p>
					<span class="decoration-image pill-image-1">
					</span>
				</div>

			</div>
		</footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="{{ asset('home-asset/js/jquery.min.js') }}"></script>
  <script src="{{ asset('home-asset/js/jquery-migrate-3.0.1.min.js') }}">
  </script>
  <script src="{{ asset('home-asset/js/popper.min.js') }}"></script>
  <script src="{{ asset('home-asset/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('home-asset/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('home-asset/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('home-asset/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('home-asset/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home-asset/js/jquery.magnific-popup.min.js') }}">
  </script>
  <script src="{{ asset('home-asset/js/aos.js') }}"></script>
  <script src="{{ asset('home-asset/js/jquery.animateNumber.min.js') }}">
  </script>
  <script src="{{ asset('home-asset/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('home-asset/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="{{ asset('home-asset/js/google-map.js') }}"></script>
  <script src="{{ asset('home-asset/js/main.js') }}"></script>
  
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>

    <!-- Google Map - jQuery Include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>

    <!-- Mobile Menu - jQuery Include -->
    <script src="{{ asset('assets/js/mCustomScrollbar.js') }}"></script>

    <!-- Custom - jQuery Include -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('script')
  {{-- <script>
    var refresh_count = () => {
      $.ajax({
        url: "/cart/get_sum",
        type: "POST",
      }).done(function(data) {
        $('#cart-count').html("[" + data + "]")
      });
    }
    refresh_count();
  </script> --}}
  
</body>

</html>