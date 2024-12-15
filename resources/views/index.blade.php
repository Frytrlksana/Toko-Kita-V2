@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>TokoKita | Tampatnya Camilan & Minuman</title>

	</head>

	<body class="home-v1">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="las la-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->
		
		<!-- main body - start
		================================================== -->
		<main>

			<!-- slider-section - start
			================================================== -->
			<section id="slider-section" class="slider-section clearfix">
				<div id="main-carousel" class="main-carousel arrow-right-left owl-carousel owl-theme">
					<div class="item d-flex align-items-center" data-background="assets/images/slider/bg_4.png">
						<div class="container">
							<div class="row justify-content-lg-start justify-content-md-center">
								<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="post-type animate-item"># Toko Kita</span>
										<h3 class="item-title animate-item">
											TOKO KITA - Tempatnya Camilan & Minuman
										</h3>
										<p class="animate-item">
											Kami percaya bahwa setiap gigitan dan teguan harus membawa kebahagiaan!
										</p>
										<div class="btns-group ul-li animate-item clearfix">
											<ul class="clearfix">
												<li><a href="{{ url('/product') }}" class="btn bg-custom-brown">SHOP NOW</a></li>
												<li><a href="{{ url('/about') }}" class="btn bg-custom-brown2">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item d-flex align-items-center" data-background="assets/images/slider/bg_1.png">
						<div class="container">
							<div class="row justify-content-lg-start justify-content-md-center">
								<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="post-type animate-item"># Toko Kita</span>
										<h3 class="item-title animate-item">
											TOKO KITA - Tempatnya Camilan & Minuman
										</h3>
										<p class="animate-item">
											Kami percaya bahwa setiap gigitan dan teguan harus membawa kebahagiaan!
										</p>
										<div class="btns-group ul-li animate-item clearfix">
											<ul class="clearfix">
												<li><a href="{{ url('/product') }}" class="btn bg-custom-brown">SHOP NOW</a></li>
												<li><a href="{{ url('/about') }}" class="btn bg-custom-brown2">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item d-flex align-items-center" data-background="assets/images/slider/bg_3.png">
						<div class="container">
							<div class="row text-center justify-content-center justify-content-md-center">
								<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="post-type animate-item"># Toko Kita</span>
										<h3 class="item-title animate-item">
											TOKO KITA - Tempatnya Camilan & Minuman
										</h3>
										<p class="animate-item">
											Kami percaya bahwa setiap gigitan dan teguan harus membawa kebahagiaan!
										</p>
										<div class="btns-group ul-li-center animate-item clearfix">
											<ul class="clearfix">
												<li><a href="{{ url('/product') }}" class="btn bg-custom-brown">SHOP NOW</a></li>
												<li><a href="{{ url('/about') }}" class="btn bg-custom-brown2">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- slider-section - end
			================================================== -->


			<!-- promotion-section - start
			================================================== -->
			<section id="promotion-section" class="promotion-section sec-ptb-100 pb-0 decoration-wrap clearfix">
				<div class="container">
					<div class="masonry-grid">
						<div class="grid-sizer"></div>

						<div class="grid-item">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="assets/images/promotion/img_1.png" alt="image_not_found">
								</a>
								<div class="promotion-content position-bottom text-right">
									<h3 class="item-title">
										<strong class="text-light-green d-block mb-1">50% OFF</strong> For First Purchase
									</h3>
									<a href="{{ url('/product') }}" class="btn bg-custom-brown">SHOP NOW</a>
								</div>
							</div>
						</div>

						<div class="grid-item w-66">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="assets/images/promotion/img_2.png" alt="image_not_found">
								</a>
								<div class="promotion-content size-increase position-vertical-center">
									<h3 class="item-title">
										<strong class="text-light-green d-block mb-1">50% OFF</strong> <span class="d-block">Food and</span> <span class="d-block">Drink</span>
									</h3>
									<a href="{{ url('/product') }}" class="btn-underline">Visit Store</a>
								</div>
							</div>
						</div>

						<div class="grid-item">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="assets/images/promotion/img_3.png" alt="image_not_found">
								</a>
								<div class="promotion-content position-bottom text-right">
									<h3 class="item-title">
										<span class="d-block">Get</span> <span class="d-block">The Taste!</span>
									</h3>
									<a href="{{ url('/product') }}" class="btn-underline">Visit Store</a>
								</div>
							</div>
						</div>

						<div class="grid-item">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="assets/images/promotion/img_4.png" alt="image_not_found">
								</a>
								<div class="promotion-content position-top size-decrease">
									<small class="d-block text-white mb-1">Toko Kita</small>
									<h3 class="item-title">
										<span class="d-block">Tempat Jajanan </span> <span class="d-block">& Minuman</span>
									</h3>
									<a href="{{ url('/product') }}" class="btn-underline">Shop Now</a>
								</div>
							</div>
						</div>

					</div>
				</div>
        
			</section>
			<!-- promotion-section - end
			================================================== -->


			<!-- shop-section - start
			================================================== -->
			<section class="shop-section sec-ptb-100 decoration-wrap clearfix">
				<div class="container">
					<div class="section-title text-center mb-70">
						<h2 class="title-text mb-3">Our Product</h2>
						<p class="mb-0">Enjoy special discounts and free shipping for your first purchase!</p>
					</div>

					<div class="tabs-nav ul-li-center clearfix">
						<ul class="nav" role="tablist">
							<li>
								<a class="active" href="#popular-items" data-toggle="tab" role="tab">Best Sellers</a>
							</li>
						</ul>
					</div>
					
					<div class="tab-content">
						<div id="popular-items" class="tab-pane active">
							<div class="row justify-content-center mb-70">
								@foreach ($latestProducts->take(4) as $product)
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
										<div class="product-grid text-center clearfix">
											<div class="item-image">
												@if ($product->image)
													<a href="{{ route('product.show', $product) }}" class="img-prod">
														<img class="img-fluid"
															src="{{ asset('storage/' . $product->image) }}" 
															alt="Colorlib Template"
															style="min-height:260px;max-height:260px;width:100%;object-fit: cover;">
														<div class="overlay"></div>
													</a>
												@else
													<a href="{{ route('product.show', $product) }}" class="img-prod">
														<img class="img-fluid"
															src="{{ asset('storage/product-image/product-default.jpg') }}" 
															alt="Colorlib Template"
															style="min-height:260px;max-height:260px;width:100%;object-fit: cover;">
														<div class="overlay"></div>
													</a>
												@endif
												<div class="btns-group ul-li-center clearfix">
													<ul class="clearfix">
														<li>
															<a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"
															onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $product->id }}').submit();">
																<i class="las la-shopping-basket"></i>
															</a>
														</li>
														<!-- Form tersembunyi untuk submit ke cart -->
														<form id="add-to-cart-{{ $product->id }}" action="{{ route('cart.store') }}" method="POST" style="display: none;">
															@csrf
															<input type="hidden" name="quantity" value="1">
															<input type="hidden" name="product_id" value="{{ $product->id }}">
														</form>
														<li>
															<a class="tooltipes" href="#"
															data-id="{{ $product->id }}" 
															data-name="{{ $product->name }}"
															data-image="{{ asset('storage/' . $product->image) }}"
															data-description="{{ $product->description }}"
															data-price="{{ $product->price }}"
															data-category="{{ $product->category->name }}"
															data-placement="top" 
															title="Quick View" 
															data-toggle="modal" 
															data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
															</a>
														</li>
														<li>
															{{-- <a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist">
																<i class="lar la-heart"></i>
															</a> --}}
														</li>
													</ul>
												</div>
											</div>
											<div class="item-content">
												<h3 class="item-title">
													<a href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
												</h3>
												<span class="item-price">
													<span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
												</span>
												<div class="rating-star ul-li-center clearfix">
													<ul class="clearfix">
														<li class="active"><i class="las la-star"></i></li>
														<li class="active"><i class="las la-star"></i></li>
														<li class="active"><i class="las la-star"></i></li>
														<li class="active"><i class="las la-star"></i></li>
														<li><i class="las la-star"></i></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
							<div class="btn-wrap text-center clearfix">
								<a href="{{ url('/product') }}" class="btn bg-custom-brown">VIEW ALL</a>
							</div>
					</div>

				<span class="decoration-image pill-image-1">
				</span>
			</section>

			<!-- product quick view - start -->
				<div class="quickview-modal modal fade" id="quickview-modal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content clearfix">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						<div class="item-image">
						<img src="" class="img-fluid" id="quickview-image" alt="">
						</div>
						
						<div class="item-content">
						<h2 class="item-title mb-15" id="quickview-title"></h2>
						<div class="rating-star ul-li mb-30 clearfix" id="quickview-rating">
							<!-- Rating stars will be dynamically added here -->
							<span class="review-text" id="quickview-reviews"></span>
						</div>
						<span class="item-price mb-15" id="quickview-price"></span>
						<p class="mb-30" id="quickview-description"></p>
						<div class="quantity-form mb-30 clearfix">
							<strong class="list-title">Quantity:</strong>
							<div class="quantity-input">
							<form action="#">
								<span class="input-number-decrement">–</span>
								<input class="input-number-1" type="text" value="1">
								<span class="input-number-increment">+</span>
							</form>
							</div>
						</div>
						<div class="btns-group ul-li mb-30">
							<ul class="clearfix">
								<li>
									<a href="#!" class="btn bg-custom-brown" onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $product->id }}').submit();">Add to Cart</a>      
								</li>
							{{-- <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li> --}}
							</ul>
						</div>
						<div class="info-list ul-li-block">
							<ul class="clearfix">
							<li><strong class="list-title">Category:</strong> <span id="quickview-category"></span></li>
							<li class="social-icon ul-li">
								<strong class="list-title">Share:</strong>
								<ul class="clearfix">
								<li><a href="#!"><i class="lab la-facebook"></i></a></li>
								<li><a href="#!"><i class="lab la-twitter"></i></a></li>
								<li><a href="#!"><i class="lab la-instagram"></i></a></li>
								<li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
								</ul>
							</li>
							</ul>
						</div>
						</div>
					</div>
					</div>
				</div>
			<!-- product quick view - end -->
			<!-- shop-section - end
			================================================== -->


			{{-- <!-- offer-section - start
			================================================== -->
			<section id="offer-section" class="offer-section clearfix">
				<div class="wrap-1600 sec-ptb-100 bg-gray decoration-wrap clearfix">
					<div class="container">
						<div class="offer-item clearfix">
							<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

								<div class="col-lg-5 col-md-7 col-sm-10 col-xs-12 order-last">
									<div class="item-image">
										<img src="assets/images/offer/img_1.png" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
									<div class="item-content">
										<h4 class="sub-title text-light-green mb-3">Intro Sale Offer!</h4>
										<h2 class="title-text mb-3">Buy all of your medicines at 50% offer.</h2>
										<p class="mb-30">Get extra cashback discounts and free international shipping.</p>
										<div class="countdown-timer ul-li mb-30 clearfix">
											<ul class="countdown-list" data-countdown="2024/11/30"></ul>
										</div>
										<a href="{{ url('/product') }}" class="btn bg-custom-brown">SHOP NOW</a>
									</div>
								</div>
								
							</div>
						</div>

						<span class="decoration-image leaf-image-1">
							<img src="assets/images/decoration/leaf_1.png" alt="leaf_image_not_found">
						</span>
						<span class="decoration-image leaf-image-2">
							<img src="assets/images/decoration/leaf_1.png" alt="leaf_image_not_found">
						</span>
					</div>
				</div>
			</section>
			<!-- offer-section - end
			================================================== --> --}}


			<!-- policy-section - start
			================================================== -->
			<section id="policy-section" class="policy-section sec-ptb-100 pb-0 clearfix">
				<div class="container">
					<div class="row mt--40 row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="policy-default clearfix">
								<div class="item-icon"><i class="las la-wallet"></i></div>
								<div class="item-content">
									<h3 class="item-title">Enjoy Discounted Prices!</h3>
									<p class="mb-0">
										Get a special discount of 10% for every purchase above IDR 200,000. Come shopping now!
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="policy-default clearfix">
								<div class="item-icon"><i class="las la-shipping-fast"></i></div>
								<div class="item-content">
									<h3 class="item-title">Fast and Responsive Service</h3>
									<p class="mb-0">
										We are ready to serve you promptly and ensure your satisfaction!
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="policy-default clearfix">
								<div class="item-icon"><i class="las la-laptop"></i></div>
								<div class="item-content">
									<h3 class="item-title">Work & Study Comfort</h3>
									<p class="mb-0">
										Enjoy a comfortable atmosphere with work desk facilities, a place to do assignments, and free WiFi.
									</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- policy-section - end
			================================================== -->


			<!-- shop-section - start
			================================================== -->
			<section class="shop-section sec-ptb-100 decoration-wrap clearfix">
				<div class="container">

					<div class="section-title text-center mb-70">
						<h2 class="title-text mb-3">Get a Free Menu!</h2>
						<p class="mb-0">Special for you! Every payment above IDR 200,000 will get a free menu of our choice. Don't miss this opportunity!</p>
					</div>

					<div id="column-4-carousel" class="column-4-carousel arrow-right-left owl-carousel owl-theme">
						@foreach ($latestProducts as $product)
							<div class="item">
								<div class="product-grid text-center clearfix">
									<div class="item-image">
										@if ($product->image)
											<a href="{{ route('product.show', $product) }}" class="img-prod">
												<img class="img-fluid"
													src="{{ asset('storage/' . $product->image) }}" 
													alt="{{ $product->name }}"
													style="min-height:260px;max-height:260px;width:100%;object-fit: cover;">
												<div class="overlay"></div>
											</a>
										@else
											<a href="{{ route('product.show', $product) }}" class="img-prod">
												<img class="img-fluid"
													src="{{ asset('storage/product-image/product-default.jpg') }}" 
													alt="Default Product"
													style="min-height:260px;max-height:260px;width:100%;object-fit: cover;">
												<div class="overlay"></div>
											</a>
										@endif
										<div class="btns-group ul-li-center clearfix">
											<ul class="clearfix">
												<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
												<li>
													<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
														<i class="las la-dot-circle"></i>
													</a>
												</li>
												{{-- <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li> --}}
											</ul>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title">
											<a href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
										</h3>
										<span class="item-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
										<div class="rating-star ul-li-center clearfix">
											<ul class="clearfix">
												<li class="active"><i class="las la-star"></i></li>
												<li class="active"><i class="las la-star"></i></li>
												<li class="active"><i class="las la-star"></i></li>
												<li class="active"><i class="las la-star"></i></li>
												<li><i class="las la-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					
				</div>
			</section>
			<!-- shop-section - end
			================================================== -->


			<!-- newsletter-section - start
			================================================== -->
			<section id="newsletter-section" class="newsletter-section decoration-wrap clearfix">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
							<div class="newsletter-boxed bg-gray clearfix">

								<div class="section-title text-center mb-60">
									<h2 class="title-text mb-3">Newsletter and offer update</h2>
									<p class="mb-0">Get up to <strong class="text-light-green">30%</strong> off your first purchase by joining Newsletter, and receive weekly amazing Offer!</p>
								</div>

								<div class="form-item">
									<input type="email" name="email" placeholder="Enter your email">
									<button type="submit" class="btn bg-custom-brown">SUBSCRIBE</button>
								</div>

								<div class="checkbox-btn">
									<input id="agree-btn" type="checkbox">
									<label for="agree-btn">I have read and agreed the Terms, and Privacy Policy</label>
								</div>

							</div>
						</div>
					</div>
				</div>

				<span class="decoration-image pill-image-1">
				</span>
			</section>
			<!-- newsletter-section - end
			================================================== -->

			<!-- brand-section - start
			================================================== -->
			<div class="d-flex justify-content-center align-items-center" style="height: 8vh;">
			</div>

			<div id="brand-section" class="brand-section clearfix">
				<div class="section-title text-center mb-70">
					<h2 class="title-text mb-3">Our Partners</h2>
				</div>
				<div class="container">
					<div class="brand-carousel mt--40 owl-carousel owl-theme">

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_1.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_2.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_3.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_4.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								
								<img src="{{ asset('assets/images/brand/img_5.png') }}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_6.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_1.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_2.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_3.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_4.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_5.png" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="assets/images/brand/img_6.png" alt="logo_not_found">
							</a>
						</div>
						
					</div>
				</div>
			</div>
			<!-- brand-section - end
			================================================== -->


			<!-- instagram-section - start
			================================================== -->
			<section id="instagram-section" class="instagram-section sec-ptb-100 clearfix">
			</section>
			<!-- instagram-section - end
			================================================== -->


		</main>
			<script>
				function formatRupiah(angka) {
				return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
				}
				document.addEventListener('DOMContentLoaded', function() {
				const quickViewButtons = document.querySelectorAll('.tooltipes');
			
				quickViewButtons.forEach(button => {
				button.addEventListener('click', function() {
					const productId = button.getAttribute('data-id');
					const productName = button.getAttribute('data-name');
					const productImage = button.getAttribute('data-image');
					const productDescription = button.getAttribute('data-description');
					const productPrice = button.getAttribute('data-price');
					const formattedPrice = formatRupiah(productPrice);
					const productCategory = button.getAttribute('data-category');
			
					// Isi konten modal dengan data yang diambil
					document.getElementById('quickview-title').textContent = productName;
					document.getElementById('quickview-description').textContent = productDescription;
					document.getElementById('quickview-price').textContent = formattedPrice;
					document.getElementById('quickview-category').textContent = productCategory;
			
					// Update gambar
					const itemImage = document.getElementById('quickview-image');
					itemImage.src = productImage;
					itemImage.alt = productName;
				});
				});
			});
			</script>
		<!-- main body - end
		================================================== -->


		<!-- footer-section - start
		================================================== -->
		
		<!-- footer-section - end
		================================================== -->

	</body>
</html>