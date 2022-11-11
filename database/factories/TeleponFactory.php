<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Telepon;
use Faker\Generator as Faker;

$factory->define(Telepon::class, function (Faker $faker) {
    return [
        'id_siswa' => $faker->randomDigit(),
        'nomor_telepon' => $faker->phoneNumber
    ];
});
