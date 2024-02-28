<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository
{
    public function getAll() {
        return Product::with('category')->get();
    }

    public function getbyCategoryId($categoryId) {
        return Product::where('categoryId', $categoryId)->get();
    }
}
