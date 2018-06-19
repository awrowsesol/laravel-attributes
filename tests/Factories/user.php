<?php

use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'     => $faker->name,
        'email'    => $faker->email,
        'password' => 'foobarbaz'
    ];
});