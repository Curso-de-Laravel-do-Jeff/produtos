<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Repositories\Models\Category::class, function (Faker $faker) {
    return [
        'category' => $faker->name
    ];
});
