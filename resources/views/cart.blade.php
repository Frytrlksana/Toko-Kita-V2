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
    <h1 class="page-title mb-3">Cart</h1>
    <div class="breadcrumb-nav ul-li-center clearfix">
      <ul class="clearfix">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Cart</li>
      </ul>
    </div>
  </div>

  <span class="decoration-image pill-image-1">
    <img src="{{ asset('assets/images/decoration/pill_1.png') }}" alt="pill_image_not_found">
  </span>
</section>

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($cart as $product)
              <tr class="text-center">
                <td class="product-remove">
                  <form action="{{ route('cart.delete') }}" method="POST">
                    @csrf

                    <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                    <button type="submit" class="form-control" style="cursor: pointer;">
                      <span class="ion-ios-close"></span>
                    </button>
                  </form>
                </td>

                <td class="image-prod">
                  <div class="img" style="background-image:url({{ $product->options['image'] }});">
                  </div>
                </td>

                <td class="product-name">
                  <h3>{{ $product->name }}</h3>
                </td>

                <td class="price">Rp
                  {{ number_format($product->price, 0, ',', '.') }}</td>

                <td class="quantity">
                  <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="rowId" value="{{ $product->rowId }}">

                    <div class="input-group mb-3">
                      <input type="number" name="quantity" class="quantity form-control input-number"
                        value="{{ $product->qty }}" min="1" max="100">
                    </div>
                    <button type="submit" class="btn bg-custom-brown py-2" style="color: white !important;">Save</button>
                  </form>
                </td>

                <td class="total">
                  Rp
                  {{ number_format($product->price * $product->qty, 0, ',', '.') }}
                </td>
              </tr><!-- END TR-->

              @empty
              <tr class="text-center">
                <td class="product-name">
                  <h4>Cart Empty</h4>
                </td>
              </tr>
              @endforelse

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row justify-content-end">
      <div class="col-lg-5 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
          <h3>Cart Totals</h3>
          <p class="d-flex">
            <span>Subtotal</span>
            <span class="text-right">
              Rp {{ number_format($subtotal, 0, ',', '.') }}
            </span>
          </p>
          <hr>
          <p class="d-flex total-price">
            <span>Total</span>
            <span class="text-right">
              Rp {{ number_format($total, 0, ',', '.') }}
            </span>
          </p>
        </div>
        <p class="text-center">
          <a href="{{ route('admin.checkout.index') }}" class="btn bg-custom-brown py-3 px-4">
            Proceed to Checkout
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

@endsection