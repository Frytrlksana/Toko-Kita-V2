<div class="row mb-70 justify-content-center" id="product-list">
    @forelse ($products as $product)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-item" data-category-id="{{ $product->category->id }}">
            <div class="product-grid text-center clearfix">
                <div class="item-image">
                    <a href="{{ route('product.show', $product) }}" class="image-wrap" width="270" height="360">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('storage/product-image/product-default.jpg') }}" alt="{{ $product->name }}">
                        @endif
                    </a>
                    <div class="btns-group ul-li-center clearfix">
                        <ul class="clearfix">
                            <li>
                                <a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"
                                onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $product->id }}').submit();">
                                    <i class="las la-shopping-basket"></i>
                                </a>
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
                        </ul>
                    </div>
                </div>
                <div class="item-content">
                    <h3 class="item-title">
                        <a href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
                    </h3>
                    <span class="item-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>
    @empty
        <p>No products available.</p>
    @endforelse
</div>