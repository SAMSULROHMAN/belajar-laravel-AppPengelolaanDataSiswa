<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hobi;
use Faker\Generator as Faker;

$factory->define(Hobi::class, function (Faker $faker) {
    return [
        'nama_hobi' => $faker->word()
    ];
});
