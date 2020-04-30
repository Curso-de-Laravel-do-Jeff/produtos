<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Service\Product;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->index();

        return view('products.index', compact('products'));
    }
}
