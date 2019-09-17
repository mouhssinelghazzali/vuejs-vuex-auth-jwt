<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence(5),
       'description' => $faker->paragraph()
    ];
});
