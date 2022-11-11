<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'nisn' => $faker->randomNumber(4),
        'nama_siswa' => $faker->name(),
        'tanggal_lahir' => $faker->date('Y-m-d'),
        'jenis_kelamin' => $faker->randomElement(['L','P']),
        'id_kelas' => 1,
    ];
});
