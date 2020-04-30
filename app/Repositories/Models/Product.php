<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'id_category'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
}
