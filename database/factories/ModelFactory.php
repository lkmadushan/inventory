<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Inventory::class, function (Faker\Generator $faker) {
    return [
        'item_no' => $faker->randomNumber(5),
        'name' => $faker->name,
        'description' => $faker->sentence,
        'quantity' => $faker->randomDigit
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'order_no' => $faker->randomNumber(5),
        'ordered_date' => $faker->date(),
        'total_amount' => $faker->randomFloat(2, 3)
    ];
});