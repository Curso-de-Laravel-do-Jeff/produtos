<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = [
        'category'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_category', 'id');
    }
}
