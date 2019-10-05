<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3),
        'description' => $faker->realText(),
        'status' => $faker->randomElement([Product::ACTIVE_STATUS, Product::INACTIVE_STATUS, Product::SUSPENDED_STATUS]),
        'free_shipping' => $faker->boolean(),
    ];
});