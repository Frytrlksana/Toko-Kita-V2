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
    <h1 class="page-title mb-3">Shop</h1>
    <div class="breadcrumb-nav ul-li-center clearfix">
      <ul class="clearfix">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Shop</li>
      </ul>
    </div>
  </div>

  <span class="decoration-image pill-image-1">
    <img src="{{ asset('assets/images/decoration/pill_1.png') }}" alt="pill_image_not_found">
  </span>
</section>

<main>

  <!-- shop-section - start
  ================================================== -->
  <section class="shop-section sec-ptb-100 pb-0 decoration-wrap clearfix mb-5">
    <div class="container">
      <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 order-last">
          <div class="filter-wrap border-bottom clearfix">
            <div class="row">
              <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="layout-tab ul-li clearfix">
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 text-center">
                <p class="result-text">We found <span>{{ $productCount }}</span> products are available for you</p>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
              </div>
            </div>
          </div>

          <div class="tab-content">
            <div id="column-3-tab" class="tab-pane active">
              @include('partials.product-list', ['products' => $products])
            <div class="pagination-nav ul-li-center clearfix">
              <ul class="clearfix">
                  <!-- Previous Button -->
                  @if ($products->onFirstPage())
                      <li class="disabled"><a href="#!"><i class="las la-angle-left"></i></a></li>
                  @else
                      <li><a href="{{ $products->previousPageUrl() }}"><i class="las la-angle-left"></i></a></li>
                  @endif
          
                  <!-- Page Number Links -->
                  @for ($i = 1; $i <= $products->lastPage(); $i++)
                      @if ($i == $products->currentPage())
                          <li class="active"><a href="#!">{{ $i }}</a></li>
                      @else
                          <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                      @endif
                  @endfor
          
                  {{-- <!-- Ellipsis -->
                  @if ($products->hasMorePages() && $products->currentPage() < $products->lastPage() - 1)
                      <li><a href="#!">...</a></li>
                  @endif --}}
          
                  {{-- <!-- Last Page Number -->
                  @if ($products->hasMorePages())
                      <li><a href="{{ $products->url($products->lastPage()) }}">{{ $products->lastPage() }}</a></li>
                  @endif --}}
          
                  <!-- Next Button -->
                  @if ($products->hasMorePages())
                      <li><a href="{{ $products->nextPageUrl() }}"><i class="las la-angle-right"></i></a></li>
                  @else
                      <li class="disabled"><a href="#!"><i class="las la-angle-right"></i></a></li>
                  @endif
              </ul>
          </div>
          
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <aside id="sidebar-section" class="sidebar-section clearfix">
            <div class="widget sidebar-search">
              <form action="#">
                <input type="search" name="search" placeholder="Search you Product">
                <button type="submit"><i class="las la-search"></i></button>
              </form>
            </div>

            <div class="widget products-category ul-li-block">
              <h3 class="widget-title">Categories</h3>
              <ul class="clearfix">
                  @php
                      $allCategories = \App\Models\Category::all(); // Mengambil semua kategori dari model Category
                  @endphp
          
                  @foreach($allCategories as $category)
                      @if($category)
                          <li>
                              <a href="#" class="filter-category" data-id="{{ $category->id }}">{{ $category->name }}</a>
                          </li>
                      @endif
                  @endforeach
              </ul>
            </div>
          
        

            <div class="widget hot-deals">
              <h3 class="widget-title">Hot Deals</h3>
              <div id="sidebar-deals-carousel" class="sidebar-deals-carousel arrow-right-left owl-carousel owl-theme">
                @forelse ($products->take(3) as $product)
                  <div class="item">
                    <div class="product-fullimage text-center clearfix">
                      <a href="{{ route('product.show', $product) }}" class="image-wrap">
                        @if ($product->image)
                          <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="270" height="360">
                        @else
                          <img src="{{ asset('storage/product-image/product-default.jpg') }}" alt="{{ $product->name }}" width="270" height="360">
                        @endif
                      </a>
                      
                      <div class="item-content">
                        <h3 class="item-title">
                          <a href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
                        </h3>
                        <span class="item-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                      </div>
                      
                      <div class="btns-group ul-li-block clearfix">
                        <ul class="clearfix">
                          <li>
                            <a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"
                            onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $product->id }}').submit();">
                              <i class="las la-shopping-basket"></i>
                            </a>
                            @if ($cart->where('id', $product->id)->count())
                            @endif
                          </li>

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
                          {{-- Uncomment to enable additional options --}}
                          {{-- <li><a href="#!" data-toggle="tooltip" data-placement="right" title="Compare Product"><i class="las la-sync"></i></a></li> --}}
                          {{-- <li><a href="#!" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="lar la-heart"></i></a></li> --}}
                        </ul>
                      </div>
                    </div>
                  </div>
                @empty
                  <p>No products available at the moment.</p>
                @endforelse
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>


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

  <!-- shop-section - end
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
<script>
  document.querySelectorAll('.filter-category').forEach(function(link) {
      link.addEventListener('click', function(e) {
          e.preventDefault();
          const categoryId = this.getAttribute('data-id');

          document.querySelectorAll('.product-item').forEach(function(item) {
              if (item.getAttribute('data-category-id') === categoryId) {
                  item.style.display = 'block'; // Tampilkan produk yang sesuai
              } else {
                  item.style.display = 'none'; // Sembunyikan produk yang tidak sesuai
              }
          });
      });
  });
</script>
@endsection