<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'categoryId' => rand(1, 10),
        'name' => $this->faker->text(20),
        'price' => rand(100, 999),
    ];
});
