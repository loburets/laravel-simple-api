<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => Str::title($faker->safeColorName) . ' ' . $faker->word,
        'description' => $faker->realText(),
        'status' => $faker->randomElement(Product::STATUSES),
        'free_shipping' => $faker->boolean(),
    ];
});
