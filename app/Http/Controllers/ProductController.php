<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all(); // Lấy tất cả sản phẩm từ database

        return view('product.list', compact('products')); 
    }
    public function show(Product $product) 
    {
        return view('product.show', compact('product'));
    }
}
