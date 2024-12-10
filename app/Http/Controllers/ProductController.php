<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
    public function index()
    {
        // Paginate the products instead of fetching all
        $products = Product::with('category')
            ->orderBy('name')
            ->filter(request(['search', 'category'])) // Make sure this method handles query parameters correctly
            ->paginate(6); // Change this to paginate

        $productCount = $products->total(); // Get total count from paginated result

        return view('product.index', [
            'title' => "Products",
            'cart' => Cart::content(),
            'products' => $products, // Pass the paginated products
            'productCount' => $productCount // Total product count
        ]);
    }

    public function show(Product $product)
    {
        return view('product.show', [
            'title' => $product->name,
            'product' => $product,
            'cart' => Cart::content(),
            'latestProducts' => Product::latest()->take(4)->get() // Use take(4) to limit latest products
        ]);
    }
    
}
