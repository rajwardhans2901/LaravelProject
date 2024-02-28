<?php

namespace App\Http\Services;
use App\Repository\ProductRepository;



class ProductService
{

    public function __construct(
        ProductRepository $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts () {
        $products = $this->productRepository->getAll();
        return $products;
    }
}