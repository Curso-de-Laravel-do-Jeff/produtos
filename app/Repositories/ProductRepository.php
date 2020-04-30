<?php

namespace App\Repositories;

use App\Repositories\Models\Product;

class ProductRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Product();
    }

    public function getProductsWithCategory()
    {
        return $this->model->with('category')->paginate();
    }
}
