<?php

use Faker\Generator as Faker;
use App\Transaction;

$factory->define(Transaction::class, function (Faker $faker) {

    $vendedores = \App\Seller::has('products')->get()->random();
    $compradores = \App\User::all()->except($vendedores->id)->random();

    return [

        'quantity' => $faker->numberBetween(1, 3),
        'buyer_id' => $compradores->id,
        'product_id' => $vendedores->products->random()->id
    ];
});
