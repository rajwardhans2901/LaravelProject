<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Services\ProductService;


class ProductController extends Controller
{
    public function index(ProductService $productService) {
        $products = $productService->getAllProducts();
        // $products = $productService->getProductsByCategoryId(2);
        return view('products.index', compact('products'));
    }
}
