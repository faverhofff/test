<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return array (
        'id' => 8888888,
    'name' => 'cy=uc',
        'price' => '224.0',
    'description' => 'ssdsd.',
        'created_at' => NULL,
        'updated_at' => NULL
    );
});
