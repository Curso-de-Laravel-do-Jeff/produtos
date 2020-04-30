<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Repositories\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => (rand(100, 1000000) / 100),
        'id_category' => rand(1, 10)
    ];
});
