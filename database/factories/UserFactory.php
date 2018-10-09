<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'Vlad',
        'email' => 'admin@admin.com',
        'password' => 'qwerty', // secret
        'remember_token' => str_random(10),
    ];
});
