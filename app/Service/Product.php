<?php

namespace App\Service;

use App\Repositories\ProductRepository;

class Product
{
    private $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function index()
    {
        return $this->productRepository->getProductsWithCategory();
    }
}
